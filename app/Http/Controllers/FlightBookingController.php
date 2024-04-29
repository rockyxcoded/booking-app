<?php

namespace App\Http\Controllers;

use App\Models\FlightBooking;
use App\Service\PricelineService;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FlightBookingController extends Controller
{
    public function index(Request $request)
    {
        // $result = cache()->get('flights');

        try {
            $result = match ($request->input('trip_type')) {
                'round' => app(PricelineService::class)->getAirFlightRoundTrip($request->all()),
                'oneway' => app(PricelineService::class)->getAirFlightDepartures($request->all()),
            };
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());

            return back();
        }

        return inertia('Flight/Index', [
            // 'allFlights' => array_values($result['result']['itinerary_data']),
            'allFlights' => $result,
            'queryParams' => $request->all(),
        ]);
    }

    public function show(string $id)
    {
        // $encoded = request()->header('Itinerary-Data');
        // $decoded = json_decode(base64_decode($encoded), true);

        // abort_if(is_null($decoded), 404);

        return inertia('Flight/Show', [
            // 'flight' => $decoded,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getAvailableFlightCities(Request $request)
    {

        // return cache()->rememberForever('suggestswsswww', function () use ($request) {
        $response = Http::withHeaders([
            'X-RapidAPI-Host' => 'priceline-com-provider.p.rapidapi.com',
            'X-RapidAPI-Key' => '9ea3b425bamsh20daaa5ec0b7764p1bf971jsnae9291d555da',
        ])->get('https://priceline-com-provider.p.rapidapi.com/v1/flights/locations', [
            'name' => $request->input('query'),
        ]);

        $flightLocations = $response->collect();

        if ($flightLocations->has('message')) {
            logger()->error($flightLocations->get('message'));
            throw new HttpClientException('An error occurred', 500);
        }

        // return $flightLocations;

        return collect($flightLocations)->map(fn ($location) => [
            'name' => $location['displayName'],
            'country' => $location['country'],
            'longitude' => $location['lon'],
            'latitude' => $location['lat'],
            'city' => [
                'id' => $location['cityID'],
                'code' => $location['cityCode'],
                'name' => $location['cityName'],
            ],
        ]);
        // });
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'location' => 'nullable',
            'destination' => 'nullable',
            'departure_date' => 'nullable',
            // 'return_date' => 'nullable',
            'cabin_class' => 'nullable',
            'trip_type' => 'nullable',
            'adults' => 'nullable',
            'children' => 'nullable',
            // 'name' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable',
            'flight' => 'nullable',
        ]);

        $flight = new FlightBooking();
        $flight->forceFill($validated);
        $flight->save();

        // dispatch(new YourFlightBooking($flight));

        return redirect()->route('welcome');
    }
}
