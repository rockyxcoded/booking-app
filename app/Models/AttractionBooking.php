<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttractionBooking extends Model
{
    use HasFactory;

    protected $casts = [
        'attraction' => 'array',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
