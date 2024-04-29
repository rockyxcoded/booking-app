<?php

namespace App\Http\Controllers;

use App\Models\HotelBooking;
use App\Service\PricelineService;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HotelBookingController extends Controller
{
    public function index(Request $request)
    {
        // $result = cache()->get('hotels');
        $result = app(PricelineService::class)->findAvailableHotels($request->all());

        return inertia('Hotel/Index', [
            'hotels' => $result,
            'queryParams' => $request->all(),
        ]);
    }

    public function show(Request $request, string $id)
    {
        // $result = cache()->get('hotel-details');
        $result = app(PricelineService::class)->getHotelDetails($id);

        return inertia('Hotel/Show', [
            'hotel' => $result,

        ]);
    }

    public function hotelAutoSuggest(Request $request)
    {

        // return cache()->rememberForever('suggests', function () use ($request) {
        $response = Http::priceline()->get('/hotels/autoSuggest', [
            'string' => $request->city,

        ]);

        $getHotelAutoSuggestV2 = $response->collect('getHotelAutoSuggestV2');

        if ($getHotelAutoSuggestV2->has('error')) {
            throw new HttpClientException($getHotelAutoSuggestV2->get('error')['status'], 500);
        }

        return $getHotelAutoSuggestV2->get('results');
        // });
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'check_out' => 'required',
            'check_in' => 'required',
            'adults' => 'nullable',
            'children' => 'nullable',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'hotel' => 'nullable',
        ]);

        $flight = new HotelBooking();
        $flight->forceFill($validated);
        $flight->save();

        // dispatch(new YourFlightBooking($flight));

        return redirect()->back();
    }
}
