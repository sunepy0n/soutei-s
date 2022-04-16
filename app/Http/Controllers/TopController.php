<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Option;
use App\Shop;

class TopController extends Controller
{
    public function index()
    {
        
        $shop = new Shop;
        // $shopAkatsuki = $shop->search();
        // dd($shopAkatsuki);
        // $name = $shopAkatsuki->name;
        $options = Option::all();
        $shops = Shop::all();
        
        $option = new Option;
        $covers = $option->cover();
        $bodys = $option->body();
        $specials = $option->special();
        
        
        // $checkbox_array = [];
        // foreach ($request->input('checkbox') as $value){
        //     $checkbox_array[] = $value;
        // }
        
        // $shop_option = DB::table('shop_option');
         
        
        
        return view('top.index', compact('options','shops','covers','bodys','specials')); 
    }
    
}
