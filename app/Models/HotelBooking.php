<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelBooking extends Model
{
    use HasFactory;

    protected $casts = [
        'hotel' => 'array',
        'check_in' => 'date',
        'check_out' => 'date',
    ];
}
