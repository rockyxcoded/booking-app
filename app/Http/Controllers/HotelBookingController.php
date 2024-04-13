<?php

namespace App\Http\Controllers;

use App\Models\HotelBooking;
use Carbon\Carbon;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HotelBookingController extends Controller
{
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

    public function findAvailableHotels(Request $request)
    {

        // return cache()->rememberForever('hotels', function () use ($request) {
        $request->check_in = Carbon::parse($request->check_in)->toDateString();
        $request->check_out = Carbon::parse($request->check_out)->toDateString();

        $response = Http::priceline()->get('/hotels/expressResults', [
            'adults' => $request->adults,
            'children' => $request->children,
            'check_in' => $request->check_in,
            'check_out' => "$request->check_out",
            'limit' => 100,
            'city_id' => $request->city_id,
            'limit_to_country' => true,
            'rate_identifier' => true,

        ]);

        $availableHotelsCollection = $response->collect(['getHotelExpress.Results']);

        if ($availableHotelsCollection->has('error')) {
            throw new HttpClientException($availableHotelsCollection->get('error')['status'], 500);
        }

        return $availableHotelsCollection->get('results');
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
