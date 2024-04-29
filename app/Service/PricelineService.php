<?php

declare(strict_types=1);

namespace App\Service;

use Carbon\Carbon;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Support\Facades\Http;

final class PricelineService
{
    public function getHotelDetails(string $id)
    {
        $response = Http::priceline()->get('/hotels/details', [
            'hotel_id' => $id,
            'videos' => 'true',
            'id_lookup' => 'true',
            'nearby' => 'true',
            'sid' => 'iSiX639',
            'promo' => 'true',
            'reviews' => '1',
            'guest_score_breakdown' => 'true',
            'plugins' => 'true',
            'photos' => '1',
            'important_info' => 'true',
            'recent' => 'true',
        ]);

        $getHotelHotelDetails = $response->collect('getHotelHotelDetails');

        if ($getHotelHotelDetails->has('error')) {
            $splitted = explode(':', $getHotelHotelDetails->get('error')['status']);
            $message = end($splitted);
            throw new HttpClientException($message, 500);
        }

        return data_get($getHotelHotelDetails, 'results.hotel_data.hotel_0');
    }

    public function findAvailableHotels(array $params)
    {

        $params['check_in'] = Carbon::parse($params['check_in'])->toDateString();
        $params['check_out'] = Carbon::parse($params['check_out'])->toDateString();

        $response = Http::priceline()->get('/hotels/expressResults', [
            'adults' => $params['adults'],
            'children' => $params['children'],
            'check_in' => $params['check_in'],
            'check_out' => $params['check_out'],
            'limit' => 100,
            'city_id' => $params['city_id'],
            'limit_to_country' => true,
            'rate_identifier' => true,

        ]);

        if ($response->json('message')) {
            logger()->error($response->json('message'));
            throw new HttpClientException('An error occurred, Contact support', 500);
        }

        $availableHotelsCollection = $response->collect(['getHotelExpress.Results']);

        if ($availableHotelsCollection->has('error')) {
            $splitted = explode(':', $availableHotelsCollection->get('error')['status']);
            $message = end($splitted);
            throw new HttpClientException($message, 500);
        }

        return array_values(
            data_get($availableHotelsCollection, 'results.rate_data')
        );

    }

    public function getAirFlightRoundTrip(array $params)
    {

        $params['return_date'] = Carbon::parse($params['return_date'])->toDateString();
        $params['departure_date'] = Carbon::parse($params['departure_date'])->toDateString();

        $response = Http::priceline()->get('/flight/roundTrip', [
            'adults' => $params['adults'],
            'sid' => 'iSiX639',
            'children' => $params['children'],
            'convert_currency' => 'USD',
            'cabin_class' => strtolower($params['cabin_class']),
            'origin_airport_code' => "{$params['location']},{$params['destination']}",
            'destination_airport_code' => "{$params['destination']},{$params['location']}",
            'departure_date' => "{$params['departure_date']},{$params['return_date']}",
            'currency' => 'NGN',

        ]);

        $getAirFlightRoundTrip = $response->collect('getAirFlightRoundTrip');

        if ($getAirFlightRoundTrip->has('error')) {
            $splitted = explode(':', $getAirFlightRoundTrip->get('error')['status']);
            $message = end($splitted);
            throw new HttpClientException($message, 500);
        }

        return array_values(
            data_get($getAirFlightRoundTrip, 'results.result.itinerary_data')
        );
    }

    public function getAirFlightDepartures(array $params)
    {

        $params['return_date'] = Carbon::parse($params['return_date'])->toDateString();
        $params['departure_date'] = Carbon::parse($params['departure_date'])->toDateString();

        $response = Http::priceline()->get('/flight/departures', [
            'adults' => $params['adults'],
            'sid' => 'iSiX63m',
            'children' => $params['children'],
            'cabin_class' => strtolower($params['cabin_class']),
            'origin_airport_code' => $params['location'],
            'destination_airport_code' => $params['destination'],
            'departure_date' => $params['departure_date'],
        ]);

        $getAirFlightDepartures = $response->collect('getAirFlightDepartures');

        if ($getAirFlightDepartures->has('error')) {
            $splitted = explode(':', $getAirFlightDepartures->get('error')['status']);
            $message = end($splitted);
            throw new HttpClientException($message, 500);
        }

        return array_values(
            data_get($getAirFlightDepartures, 'results.result.itinerary_data')
        );
    }

    public function findAvailableCars($params)
    {

        $pickup_datetime = Carbon::parse($params['pickup_datetime']);
        $dropoff_datetime = Carbon::parse($params['dropoff_datetime']);

        $params = [

            'pickup_date' => $pickup_datetime->toDateString(),
            'dropoff_date' => $dropoff_datetime->toDateString(),
            'pickup_time' => $pickup_datetime->toTimeString(),
            'dropoff_time' => $dropoff_datetime->toTimeString(),
            'pickup_code' => $params['pickup_code'],
            'dropoff_code' => $params['dropoff_code'],
            'prepaid_rates' => true,
        ];

        $response = Http::priceline()->get('/cars/resultsVer', $params);

        $availableHotelsCollection = $response->collect(['getCarResultsV3']);

        if ($availableHotelsCollection->has('error')) {
            $splitted = explode(':', $availableHotelsCollection->get('error')['status']);
            $message = end($splitted);
            throw new HttpClientException($message, 500);
        }

        return array_values(
            $availableHotelsCollection->get('results')['result_list']
        );
    }
}
