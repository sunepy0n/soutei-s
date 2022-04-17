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
        
        // $ids->optionのtokenをarray_popで省いた$request
        // join('結合するテーブル名', '結合元テーブル名.結合するカラム名', '=', '結合先テーブル名.リンクするカラム名')
        // $test = Shop::join('shop_option', 'shops.id', '=', 'shop_option.shop_id')->select()->whereIn('shops.id', $ids)->groupBy('shops.id')->get();

        // if(isset($ids)){
        //     foreach($ids as $id){
        //         echo $id;
        //     }
        // }

        $test = Shop::join('shop_option', 'shops.id', '=', 'shop_option.shop_id')
                ->join('options', 'shop_option.option_id', '=', 'options.id')
                ->whereIn('option_id', $ids)
                ->select('shops.name', 'shops.url')
                ->get();
                
                
                
                
                
                
                // ;
                
                // $cnt = count($ids) -1;
                
                // for ($i = 0; $i <= $cnt; $i++) {
                //      $table = $table->where('option_id', '=', $ids[$i]);
                //     }
                
                // $test = $table->get();
                
        // $test2 = $test->all();
        // $test3 = $test->option_id;
        // $testE = 'null';
        
        // if($ids == $test3){
        //     return $test3;
        // }else{
        //     return $testE;
        // }
        
        return $test;
        
    }
    
    
        public function filteredShop($ids)
    { 
        


        $test2 = Shop::join('shop_option', 'shops.id', '=', 'shop_option.shop_id')
                ->join('options', 'shop_option.option_id', '=', 'options.id')
                ->groupBy('shop_id')
                ->select('shops.name', 'shops.url')
                ->get();
                
        // $test2 = $test->all();
        // $test3 = $test->option_id;
        // $testE = 'null';
        
        // if($ids == $test3){
        //     return $test3;
        // }else{
        //     return $testE;
        // }
        
        return $test2;
        
    }
    
    
}