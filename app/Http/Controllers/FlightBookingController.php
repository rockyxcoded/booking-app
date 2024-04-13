<?php

namespace App\Http\Controllers;

use App\Models\FlightBooking;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class FlightBookingController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function getAvailableFlightCities(Request $request)
    {

        // return cache()->rememberForever('suggestswwww', function () use ($request) {
        $response = Http::withHeaders([
            'X-RapidAPI-Host' => 'priceline-com-provider.p.rapidapi.com',
            'X-RapidAPI-Key' => '772958ad40mshfad83f7bf055a6fp1ae3c1jsn3a19d5547048',
        ])->get('https://priceline-com-provider.p.rapidapi.com/v1/flights/locations', [
            'name' => $request->input('query'),
        ]);

        $flightLocations = $response->collect();

        return $flightLocations;

        if ($flightLocations->has('error')) {
            // throw new HttpClientException($flightLocations->get('error')['status'], 500);
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

    public function getAirFlightRoundTrip(Request $request)
    {

        // return cache()->rememberForever('flights', function () use ($request) {
        $request->return_date = Carbon::parse($request->return_date)->toDateString();
        $request->departure_date = Carbon::parse($request->departure_date)->toDateString();

        $response = Http::priceline()->get('/flight/roundTrip', [
            'adults' => $request->adults,
            'sid' => 'iSiX639',
            'children' => $request->children,
            'convert_currency' => 'USD',
            'cabin_class' => strtolower($request->cabin_class),
            'origin_airport_code' => "$request->location,$request->destination",
            'destination_airport_code' => "$request->destination,$request->location",
            'departure_date' => "$request->departure_date,$request->return_date",

        ]);

        $getAirFlightRoundTrip = $response->collect('getAirFlightRoundTrip');

        if ($getAirFlightRoundTrip->has('error')) {
            throw new HttpClientException($getAirFlightRoundTrip->get('error')['status'], 500);
        }

        return $getAirFlightRoundTrip->get('results');
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

        return redirect()->back();
    }
}
