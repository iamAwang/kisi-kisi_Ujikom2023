<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['hotel_id','user_id','booking_date','checkin_date','status'];
    protected $table = 'bookings';

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}