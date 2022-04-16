<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;
use App\Shop;

class ResultController extends Controller
{
    public function index(Request $request)
    {
        $value = $request->all();
        // dd($request);
        $ids = array_values( $value );
        array_pop($ids);
        // dd($ids);
        
        $shop = new Shop;
        $filteredShop = $shop->search($ids);
        // dd($filteredShop);
        
        $option = new Option;
        $covers = $option->cover();
        $bodys = $option->body();
        $specials = $option->special();
        
        $reqCovers = array_keys($value);
        
        // dd($reqCovers);
        
        // dd($request, $ids, $filteredShop);
        
        return view('results.index', compact('filteredShop','covers','bodys','specials')); 
        
        
        

    }
}
