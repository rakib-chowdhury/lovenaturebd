<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Package_bn extends Model
{
    protected $table='packages_bn';
    public function hasCountry()
    {
        return $this->belongsTo('App\model\Country','country_id');
    }
    public function hasHotel()
    {
        return $this->hasMany('App\model\Package_hotel','package_code','package_code');
    }
    public function hasType()
    {
        return $this->belongsTo('App\model\Package_type','package_type_id');
    }
    public function hasImage()
    {
        return $this->hasMany('App\model\Package_images','package_code','package_code');
    }
}
