<?php

use App\Http\Controllers\AttractionBookingController;
use App\Http\Controllers\CarBookingController;
use App\Http\Controllers\FlightBookingController;
use App\Http\Controllers\HotelBookingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('welcome');

// Redirect 404 to home
Route::fallback(function () {
    return redirect('/');
});

Route::get('/migrate', function () {
    Artisan::call('migrate:fresh', ['--force' => true]);
    dd('done');
});

Route::name('flights.')->prefix('flights')->group(function () {
    Route::post('/store', [FlightBookingController::class, 'store'])->name('store');
    Route::post('/locations', [FlightBookingController::class, 'getAvailableFlightCities'])->name('locations');
    Route::post('/search', [FlightBookingController::class, 'getAirFlightRoundTrip'])->name('search');
});

Route::name('hotels.')->prefix('hotels')->group(function () {
    Route::post('/store', [HotelBookingController::class, 'store'])->name('store');
    Route::post('/search', [HotelBookingController::class, 'findAvailableHotels'])->name('search');
    Route::post('/suggest', [HotelBookingController::class, 'hotelAutoSuggest'])->name('suggest');
});

Route::name('cars.')->prefix('cars')->group(function () {
    Route::post('/store', [CarBookingController::class, 'store'])->name('store');
    Route::post('/search', [CarBookingController::class, 'findAvailableCars'])->name('search');
    Route::post('/suggest', [CarBookingController::class, 'findAvailableCities'])->name('suggest');
});

Route::name('attractions.')->prefix('attractions')->group(function () {
    Route::post('/store', [AttractionBookingController::class, 'store'])->name('store');
    Route::post('/search', [AttractionBookingController::class, 'findAvailableAttractions'])->name('search');
    Route::post('/suggest', [AttractionBookingController::class, 'findAvailableLocations'])->name('suggest');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
