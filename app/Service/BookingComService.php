<?php

declare(strict_types=1);

namespace App\Service;

use Carbon\Carbon;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

final class BookingComService
{
    public function getAvailableFlightCities(Request $request)
    {

        // return cache()->rememberForever('suggestswsswww', function () use ($request) {
        $response = Http::withHeaders([
            'X-RapidAPI-Host' => 'priceline-com-provider.p.rapidapi.com',
            'X-RapidAPI-Key' => 'd6e5ce6828msh4a6dc81d267464fp1ef074jsn54e2016eec68',
        ])->get('https://priceline-com-provider.p.rapidapi.com/v1/flights/locations', [
            'name' => $request->input('query'),
        ]);

        $flightLocations = $response->collect();

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
}
