<?php

namespace App\Http\Controllers;

use App\Models\AttractionBooking;
use Carbon\Carbon;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AttractionBookingController extends Controller
{
    public function index(Request $request)
    {
        $result = cache()->get('attractions');

        return inertia('Attraction/Index', [
            'attractions' => [...array_values($result['result']['itinerary_data'])],
            'queryParams' => $request->all(),
        ]);
    }

    public function show(Request $request, string $id)
    {
        $encoded = $request->header('Itinerary-Data');
        $decoded = json_decode(base64_decode($encoded), true);

        // abort_if(is_null($decoded), 404);

        return inertia('Attraction/Show', [
            'attraction' => $decoded,

        ]);
    }

    public function findAvailableLocations(Request $request)
    {

        // return cache()->rememberForever('att-1', function () use ($request) {
        $response = Http::bookingCom()->get('/attraction/searchLocation', [
            'query' => $request->city,
        ]);

        $availableLocations = $response->collect();

        if ((bool) $availableLocations->get('status') === false) {
            $message = $availableLocations->get('message');
            if (is_array($message)) {
                throw new HttpClientException($message[0]['query'], 500);
            }
            throw new HttpClientException($message, 500);
        }

        return collect(
            data_get($availableLocations, 'data.destinations')
        )->map(fn ($destination) => [
            'code' => $destination['id'],
            'name' => "{$destination['cityName']} ({$destination['country']})",
        ]);
        // });
    }

    public function findAvailableAttractions(Request $request)
    {

        $attractionsCollection = collect(cache()->rememberForever('attractions', function () use ($request) {
            $request->start_date = Carbon::parse($request->start_date);
            $request->end_date = Carbon::parse($request->end_date);

            $params = [
                'id' => $request->code,
                'startDate' => $request->start_date->toDateString(),
                'endDate' => $request->end_date->toDateString(),

            ];

            $response = Http::bookingCom()->get('/attraction/searchAttractions', $params);

            $attractionsCollection = $response->collect();

            return $attractionsCollection;

        }));

        if ((bool) $attractionsCollection->get('status') === false) {
            $message = $attractionsCollection->get('message');
            if (is_array($message)) {
                throw new HttpClientException($message[0]['query'], 500);
            }
            throw new HttpClientException($message, 500);
        }

        return collect(
            data_get($attractionsCollection, 'data.products')
        )->map(fn ($product) => [
            'name' => $product['name'],
            'description' => $product['shortDescription'],
            'photo' => $product['primaryPhoto']['small'],
            'pricing' => [
                'amount' => $product['representativePrice']['chargeAmount'],
                'currency' => $product['representativePrice']['currency'],
            ],
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'required',
            'end_date' => 'required',
            'code' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'attraction' => 'nullable',
        ]);

        $flight = new AttractionBooking();
        $flight->forceFill($validated);
        $flight->save();

        // dispatch(new YourFlightBooking($flight));

        return redirect()->back();
    }
}
