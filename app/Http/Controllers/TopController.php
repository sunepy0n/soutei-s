<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $shops = ['あかつき印刷', 'Onebooks'];
        
        return view('welcome', compact('shops')); 
    }
}
