<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function shops()
    {
        return $this->belongsToMany('App\Shop', 'shop_option')->withTimestamps();
        
    }
    
    public function cover()
    {
        return Option::select()->where("type", 1)->get();
        
    }
    
    public function body()
    {
        return Option::select()->where("type", 2)->get();
        
    }
    
    public function special()
    {
        return Option::select()->where("type", 3)->get();
        
        
        
    }
    

}
