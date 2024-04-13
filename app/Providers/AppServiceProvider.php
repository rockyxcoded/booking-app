<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        // Paginator::useBootstrapFour();
        Http::macro('priceline', function () {
            return Http::withHeaders([
                'X-RapidAPI-Host' => 'priceline-com-provider.p.rapidapi.com',
                'X-RapidAPI-Key' => '772958ad40mshfad83f7bf055a6fp1ae3c1jsn3a19d5547048',
            ])->baseUrl('https://priceline-com-provider.p.rapidapi.com/v2');
        });

        Http::macro('bookingCom', function () {
            return Http::withHeaders([
                'X-RapidAPI-Host' => 'booking-com15.p.rapidapi.com',
                'X-RapidAPI-Key' => 'd6e5ce6828msh4a6dc81d267464fp1ef074jsn54e2016eec68',
            ])->baseUrl('https://booking-com15.p.rapidapi.com/api/v1');
        });
    }
}
