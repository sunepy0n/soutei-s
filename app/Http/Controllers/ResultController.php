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
        
        if(isset($reqCovers)){
            $req1 = array_keys($reqCovers);
            }else{
                $req1= [];
            }
        
        if(isset($reqBodys)){
             $req2 = array_keys($reqBodys);
            }else{
                $req2= [];
            }
        
        if(isset($reqSpecials)){
          $req3 = array_keys($reqSpecials);
            }else{
                $req3= [];
            }
        
        //option.id
        $ids = array_merge($req1, $req2, $req3);
        
        $shop = new Shop;
        $search = $shop->search($ids);
        $filShops = $shop->filteredShop($ids);
        
        //idsで絞り込んでから必要なとこだけテーブルjoinできない？
        $options = Option::all();
        $options = $options->intersect(Option::whereIn('options.id', $ids)->get());
        
        
        
        // $options = Option::all();
        // $options = $options->intersect(Option::whereIn('options.id', $ids)->get());
        
        // $shopNames = $filteredShop->name;
        
        
        dd($request, $value, $reqCovers, $reqBodys, $reqSpecials, $ids, $search, $filShops, $options);
        
        
        
        return view('results.index', compact('value', 'reqCovers', 'reqBodys', 'reqSpecials', 'search','filShops')); 
        
        
        

    }
}
