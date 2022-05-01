<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index(Request $request)
    {
        $txt = $request->input("text");
        // dd($txt, $request);
        
        return redirect()->away("https://twitter.com/intent/tweet?url=https://souteikensaku.com&text=".$txt."&hashtags=そうていたんさく");

    }
}
