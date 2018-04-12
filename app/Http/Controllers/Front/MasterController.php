<?php

namespace Olotu\Http\Controllers\Front;

use Illuminate\Http\Request;
use Olotu\Http\Controllers\Controller;

class MasterController extends Controller
{
    public function index()
    {
        $change_active = 'homepage';
        return view('front.welcome', compact('change_active'));
    }
    
    public function de_village(){
        return view('front.village');
    }
    
    public function de_square()
    {
        return view('front.square');
    }
    
    public function shop()
    {
        return view('front.shop');
    }
}
