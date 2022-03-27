<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function options()
    {
        return $this->belongsToMany('App\Option', 'shop_option')->withTimestamps();
    }
}
