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
        $shopListWithOptions = $shop->shopsWithOptions();
        
        $results = [];
        
        //あかつき印刷からOnebooksまで繰り返し、withされているオプションテーブルを洗いだし、$optionIdsに格納、
        //選択したオプションのidsをひとつずつ↑と照合、無かった場合は何もしない、あった場合は$resultに$shopListを格納
        $shopListWithOptions->each(function($shopList)use(&$ids, &$results) {
            $options = $shopList->options;
            $optionIds = [];
           
            $options->each(function($option)use(&$optionIds, &$results) {
                $option->id;
                array_push($optionIds,$option->id);
            });

            $check = true;
            foreach ($ids as $id) {
                if(!in_array($id, $optionIds)){
                    $check = false;
                }
                };
     
            if($check == true){
                array_push($results,$shopList);     
            };
        });
        
        // dd($request, $value, $reqCovers, $reqBodys, $reqSpecials, $ids, $results, $shopNames, $shopUrls);

        return view('results.index', compact('value', 'reqCovers', 'reqBodys', 'reqSpecials', 'results')); 
    
    }
}
