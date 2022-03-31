<?php

namespace App\Http\Controllers;

use App\Option;
use App\Shop;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $shop = new Shop;
        $shopAkatsuki = $shop->search();
        // dd($shopAkatsuki);
        // $name = $shopAkatsuki->name;
        $options = Option::all();
        $shops = Shop::all();
        
        return view('top.index', compact('options','shops','shopAkatsuki')); 
    }

    
}
