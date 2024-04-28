<?php

namespace App\Http\Controllers;

use App\Models\CarBooking;
use Carbon\Carbon;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarBookingController extends Controller
{
    public function index(Request $request)
    {
        $result = cache()->get('cars');

        return inertia('Car/Index', [
            'cars' => [...array_values($result['result']['itinerary_data'])],
            'queryParams' => $request->all(),
        ]);
    }

    public function show(Request $request, string $id)
    {
        $encoded = $request->header('Itinerary-Data');
        $decoded = json_decode(base64_decode($encoded), true);

        // abort_if(is_null($decoded), 404);

        return inertia('Car/Show', [
            'car' => $decoded,

        ]);
    }

    public function findAvailableCities(Request $request)
    {

        // return cache()->rememberForever('car-cities1', function () use ($request) {
        $response = Http::priceline()->get('/cars/autoComplete', [
            'string' => $request->city,

        ]);

        $getCarAutoComplete = $response->collect('getCarAutoComplete');

        if ($getCarAutoComplete->has('error')) {
            throw new HttpClientException($getCarAutoComplete->get('error')['status'], 500);
        }

        return $getCarAutoComplete->get('results');
        // });
    }

    public function findAvailableCars(Request $request)
    {

        // return cache()->rememberForever('cars1', function () use ($request) {
        $request->pickup_datetime = Carbon::parse($request->pickup_datetime);
        $request->dropoff_datetime = Carbon::parse($request->dropoff_datetime);

        $params = [

            'pickup_date' => $request->pickup_datetime->toDateString(),
            'dropoff_date' => $request->dropoff_datetime->toDateString(),
            'pickup_time' => $request->pickup_datetime->toTimeString(),
            'dropoff_time' => $request->dropoff_datetime->toTimeString(),
            'pickup_code' => $request->pickup_code,
            'dropoff_code' => $request->dropoff_code,
            'prepaid_rates' => true,
        ];

        $response = Http::priceline()->get('/cars/resultsVer', $params);

        $availableHotelsCollection = $response->collect(['getCarResultsV3']);

        if ($availableHotelsCollection->has('error')) {
            throw new HttpClientException($availableHotelsCollection->get('error')['status'], 500);
        }

        return $availableHotelsCollection->get('results');
        // });
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'pickup_datetime' => 'required',
            'dropoff_datetime' => 'required',
            'pickup_code' => 'nullable',
            'dropoff_code' => 'nullable',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'car' => 'nullable',
        ]);

        $flight = new CarBooking();
        $flight->forceFill($validated);
        $flight->save();

        // dispatch(new YourFlightBooking($flight));

        return redirect()->back();
    }
}
