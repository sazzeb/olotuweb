<?php

namespace Olotu\Http\Controllers\Communities;

use Illuminate\Http\Request;
use Olotu\Http\Controllers\Controller;

class CommunitiesController extends Controller
{
    //
    public function index()
    {
        return view('layouts.communities.community');
    }
}
