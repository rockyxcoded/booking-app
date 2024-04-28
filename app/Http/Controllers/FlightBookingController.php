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
        $result = app(PricelineService::class)->getAirFlightRoundTrip($request->all());

        return inertia('Flight/Index', [
            'allFlights' => $result,
            'queryParams' => $request->all(),
        ]);
    }

    public function show(Request $request, string $id)
    {
        $encoded = $request->header('Itinerary-Data');
        $decoded = json_decode(base64_decode($encoded), true);

        // abort_if(is_null($decoded), 404);

        return inertia('Flight/Show', [
            'flight' => $decoded,

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
            'X-RapidAPI-Key' => 'e8b9f5e2d7msh0d06325056be196p1bf10fjsn7291c489bdcd',
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
            'location' => 'required',
            'destination' => 'required',
            'departure_date' => 'required',
            'return_date' => 'required',
            'cabin_class' => 'required',
            'trip_type' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'flight' => 'nullable',
        ]);

        $flight = new FlightBooking();
        $flight->forceFill($validated);
        $flight->save();

        // dispatch(new YourFlightBooking($flight));

        return redirect()->route('welcome');
    }
}
