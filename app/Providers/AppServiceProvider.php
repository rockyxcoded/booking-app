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
                'X-RapidAPI-Key' => 'e8b9f5e2d7msh0d06325056be196p1bf10fjsn7291c489bdcd',
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
