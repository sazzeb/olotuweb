<?php

namespace Olotu\Http\Controllers\Front;

use Illuminate\Http\Request;
use Olotu\Http\Controllers\Controller;
use Olotu\Repositories\Utilities\CommunityRepository;
use Olotu\Repositories\Utilities\NewsLetter;

class CommunityController extends Controller
{
    private $community;
    
    private $newsletter;
    
    public function __construct(CommunityRepository $community, Newsletter $newsletter)
    {
        $this->community = $community;
        $this->newsletter = $newsletter;
    }
    
    public function join(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:communities',
            'phone' => 'required'
        ]);
        
        $attributes = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'interest_id' => $request->interest
        ];
        
        if ($this->community->create($attributes)) {
            $this->newsletter->subscribe($request->email);
            return redirect()->back()->with('success', 'Thank you for indicating your interest. We will reach out to you soonest');
        }
        
        return redirect()->back()->with('failure', 'An error occured. Please try again');
    }
}
