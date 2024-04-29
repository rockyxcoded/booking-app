<?php

namespace App\Http\Controllers;

use App\Models\CarBooking;
use App\Service\PricelineService;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarBookingController extends Controller
{
    public function index(Request $request)
    {
        // $result = cache()->get('cars1');

        try {
            $result = app(PricelineService::class)->findAvailableCars($request->all());
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());

            return back();
        }

        return inertia('Car/Index', [
            'cars' => $result,
            'queryParams' => $request->all(),
        ]);
    }

    public function show(Request $request, string $id)
    {
        return inertia('Car/Show', [

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

        return redirect()->route('welcome');
    }
}
