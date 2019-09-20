<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
         'flight_id','booking_id', 'email', 'mobile_no', 'seat_no', 'reference_no',
    ];
}
