<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBooking extends Model
{
    use HasFactory;

    protected $casts = [
        'car' => 'array',
        'pickup_datetime' => 'datetime',
        'dropoff_datetime' => 'datetime',
    ];
}
