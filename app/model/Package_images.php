<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Package_images extends Model
{
    protected $table='package_images';
    public function hasCountry()
    {
        return $this->belongsTo('App\model\Country','country_id');
    }
}
