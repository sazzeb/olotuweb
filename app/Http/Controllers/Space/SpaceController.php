<?php

namespace Olotu\Http\Controllers\Space;

use Illuminate\Http\Request;
use Olotu\Http\Controllers\Controller;

class SpaceController extends Controller
{
    //
    public function index()
    {
        return view('layouts.space.spaces');
    }
}
