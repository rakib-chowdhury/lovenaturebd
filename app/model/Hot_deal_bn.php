<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hot_deal_bn extends Model
{
    protected $table='hot_deals_bn';
    public function hasCountry()
    {
       return $this->belongsTo('App\model\Country','country_id');
    }
    public function hasType()
    {
        return $this->belongsTo('App\model\Hot_deal_type','package_type_id');
    }
    public function hasImage()
    {
        return $this->hasMany('App\model\Hot_deal_images','package_code','package_code');
    }
//    public function sub_category()
//    {
//        return $this->belongsTo('App\model\Sub_Category','sub_cat_id');
//    }
//    public function stock()
//    {
//        return $this->hasMany('App\model\Stocks','p_id');
//    }
//    public function purchase_details()
//    {
//        return $this->hasMany('App\model\Purchase_details','p_id');
//
//    }

//    public function sell_details()
//    {
//        return $this->hasMany('App\model\Sell_details','p_id');
//
//    }
}
