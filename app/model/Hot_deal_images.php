<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hot_deal_images extends Model
{
    protected $table='hot_deals_images';
    public function hasCountry()
    {
        return $this->belongsTo('App\model\Country','country_id');
    }
}
