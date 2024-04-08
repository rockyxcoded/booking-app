<?php

namespace App\Http\Controllers;

use App\Models\FlightBooking;
use GuzzleHttp\Client;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class FlightBookingController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function search(Client $client)
    {
        $url = 'https://test.api.amadeus.com/v1/security/oauth2/token';
        try {
            $response = $client->get($url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    'client_id' => env('AMADEUS_API_KEY'),
                    'client_secret' => env('AMADEUS_API_SECRET'),
                ],
            ]);
            $response = $response->getBody();
            $access_token = json_decode($response)->access_token;

            return $response;
        } catch (HttpClientException $exception) {
            dd($exception);
        }
    }

    public function getAirFlightRoundTrip(Request $request)
    {

        // $response = cache()->get('flights');

        // $response = cache()->rememberForever('flights', function () {
        // $response = Http::priceline()->get('/flight/roundTrip', [
        //     'adults' => '1',
        //     'sid' => 'iSiX639',
        //     'children' => '0',
        //     'convert_currency' => 'USD',
        //     'cabin_class' => 'economy',
        //     'origin_airport_code' => 'YWG,JFK',
        //     'destination_airport_code' => 'JFK,YWG',
        //     'departure_date' => '2024-12-21,2024-12-25',

        // ]);

        $request->return_date = Carbon::parse($request->return_date)->toDateString();
        $request->departure_date = Carbon::parse($request->departure_date)->toDateString();

        // return [
        //     'adults' => $request->adults,
        //     'sid' => 'iSiX639',
        //     'children' => $request->children,
        //     'convert_currency' => 'USD',
        //     'cabin_class' => $request->cabin_class,
        //     'origin_airport_code' => "$request->location,$request->destination",
        //     'destination_airport_code' => "$request->destination,$request->location",
        //     'departure_date' => "$request->departure_date,$request->return_date",

        // ];

        $response = Http::priceline()->get('/flight/roundTrip', [
            'adults' => $request->adults,
            'sid' => 'iSiX639',
            'children' => $request->children,
            'convert_currency' => 'USD',
            'cabin_class' => ($request->cabin_class),
            'origin_airport_code' => "$request->location,$request->destination",
            'destination_airport_code' => "$request->destination,$request->location",
            'departure_date' => "$request->departure_date,$request->return_date",

        ]);

        $getAirFlightRoundTrip = $response->collect('getAirFlightRoundTrip');

        if ($getAirFlightRoundTrip->has('error')) {
            throw new HttpClientException($getAirFlightRoundTrip->get('error')['status'], 500);
        }

        return $getAirFlightRoundTrip->get('results');
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

        return back();
    }
}
