<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hotel extends Model
{
    protected $table='hotel_info';
   public function hasCountry()
    {
       return $this->belongsTo('App\model\Country','country_id');
    }
    public function hasHotel()
    {
       return $this->hasOne('App\model\Hotel','id');
    }
    public function hasHotelBn()
    {
       return $this->hasOne('App\model\Hotel_bn','id');
    }
}
