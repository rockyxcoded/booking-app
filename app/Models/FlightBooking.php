<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightBooking extends Model
{
    use HasFactory;

    protected $casts = [
        'flight' => 'array',
        'departure_date' => 'date',
        'return_date' => 'date',
    ];
}
