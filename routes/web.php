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

Route::middleware('guest')->group(function () {
    Route::get('/flights/search', [FlightBookingController::class, 'index'])->name('flights.index');
    Route::post('/flights', [FlightBookingController::class, 'store'])->name('flights.store');
    Route::get('/flights/{id}', [FlightBookingController::class, 'show'])->name('flights.show');
    Route::post('/flights/locations', [FlightBookingController::class, 'getAvailableFlightCities'])->name('flights.locations');
    Route::post('/flights/search', [FlightBookingController::class, 'getAirFlightRoundTrip'])->name('flights.search');

    Route::name('hotels.')->prefix('hotels')->group(function () {
        Route::get('/', [HotelBookingController::class, 'index'])->name('index');
        Route::post('/store', [HotelBookingController::class, 'store'])->name('store');
        Route::get('/{id}', [HotelBookingController::class, 'show'])->name('show');
        Route::post('/search', [HotelBookingController::class, 'findAvailableHotels'])->name('search');
        Route::post('/suggest', [HotelBookingController::class, 'hotelAutoSuggest'])->name('suggest');
    });

    Route::name('cars.')->prefix('cars')->group(function () {
        Route::get('/', [CarBookingController::class, 'index'])->name('index');
        Route::post('/store', [CarBookingController::class, 'store'])->name('store');
        Route::get('/{id}', [CarBookingController::class, 'show'])->name('show');
        Route::post('/search', [CarBookingController::class, 'findAvailableCars'])->name('search');
        Route::post('/suggest', [CarBookingController::class, 'findAvailableCities'])->name('suggest');
    });

    Route::name('attractions.')->prefix('attractions')->group(function () {
        Route::get('/', [AttractionBookingController::class, 'index'])->name('index');
        Route::post('/store', [AttractionBookingController::class, 'store'])->name('store');
        Route::get('/{id}', [AttractionBookingController::class, 'show'])->name('show');
        Route::post('/search', [AttractionBookingController::class, 'findAvailableAttractions'])->name('search');
        Route::post('/suggest', [AttractionBookingController::class, 'findAvailableLocations'])->name('suggest');
    });
});

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
    // return redirect('/');
    return inertia('Blank');
});

Route::get('/migrate', function () {
    Artisan::call('migrate:fresh', [
        '--seed' => true,
        '--force' => true,
    ]);

    return ['done'];
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
require __DIR__.'/pages.php';
