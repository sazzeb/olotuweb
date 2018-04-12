<?php

namespace Olotu\Http\Controllers\Utilities;

use Illuminate\Http\Request;
use Olotu\Http\Controllers\Controller;
use Olotu\Repositories\Utilities\NewsLetter;

class NewsLetterController extends Controller
{
    private $newsletter;
    
    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;    
    }
    
    public function subscribe(Request $request)
    {
        
        $response = $this->newsletter->subscribe($request->email);
        return response()->json(['response' => $response], 200);
    }
}
