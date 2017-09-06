<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tour_images extends Model
{
    protected $table='tour_images';
    public function hasCountry()
    {
        return $this->belongsTo('App\model\Country','country_id');
    }
}
