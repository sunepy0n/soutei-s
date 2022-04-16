<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function options()
    {
        return $this->belongsToMany('App\Option', 'shop_option')->withTimestamps();
        
    }
    
    public function search($ids)
    { 
        
        //$ids->optionのtimestampをarray_popで省いた$request
        $test = Shop::join('shop_option', 'shops.id', '=', 'shop_option.shop_id')->select()->whereIn('shops.id', $ids)->groupBy('shops.id')->get();
        
        return $test;
        
    }
    
}