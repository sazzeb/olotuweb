<?php

namespace Olotu\Http\Controllers\Solution;

use Illuminate\Http\Request;
use Olotu\Http\Controllers\Controller;

class SolutionController extends Controller
{
    //
    public function index()
    {
        return view('layouts.solutions.solution');
    }
}
