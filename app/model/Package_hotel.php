<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Package_hotel extends Model
{
    protected $table='package_hotel';

    public function hasHotel()
    {
        return $this->belongsTo('App\model\Hotel','hotel_name');
    }
    public function hasHotelBn()
    {
        return $this->belongsTo('App\model\Hotel_bn','hotel_name');
    }
    
}
