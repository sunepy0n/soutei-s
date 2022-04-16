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
        $reqCovers = $request->cover;
        $reqBodys = $request->body;
        $reqSpecials = $request->special;
        
        // dd($request);
        $ids = array_values( $value );
        array_pop($ids);
        // dd($ids);
        
        $shop = new Shop;
        // $filteredShop = $shop->search($ids);
        // dd($filteredShop);
        
        
        // dd($value, $reqCovers, $reqBodys, $reqSpecials, $ids);
        
        // dd($request, $ids, $filteredShop);
        
        return view('results.index', compact('value', 'reqCovers', 'reqBodys', 'reqSpecials', 'filteredShop')); 
        
        
        

    }
}
