<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tour_bn extends Model
{
    protected $table='tours_info_bn';
    public function hasCountry()
    {
        return $this->belongsTo('App\model\Country','country_id');
    }
    public function hasType()
    {
        return $this->belongsTo('App\model\Package_type','package_type_id');
    }
    public function hasImage()
    {
        return $this->belongsTo('App\model\Tour_images','package_code','package_code');
    }

}
