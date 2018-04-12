<?php

namespace Olotu\Http\Controllers\Utilities;

use Illuminate\Http\Request;
use Olotu\Http\Controllers\Controller;
use Olotu\Notifications\Utilities\SupportAlert;
use Olotu\Recipients\DynamicRecipient;

class SupportController extends Controller
{
    public function contact(Request $request)
    {
        $name       = $request->name; 
        $from       = $request->email; 
        $subject    = $request->subject; 
        $message    = $request->message;

        $response = [];
        if ($name == '') {
            $response['status'] = 0;
            $response['message'] = 'All Fields are Required';
            return response()->json(['response' => $response], 200);
        }

        if ($from == '') {
            $response['status'] = 0;
            $response['message'] = 'All Fields are Required';
            return response()->json(['response' => $response], 200);
        }
        
        if ($message == '') {
            $response['status'] = 0;
            $response['message'] = 'All Fields are Required';
            return response()->json(['response' => $response], 200);
        }
        
        if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
            $response['status'] = 0;
            $response['message'] = 'Please enter a valid email address';
            return response()->json(['response' => $response], 200);
        }
        
        $recipient = new DynamicRecipient(env('OLOTU_SUPPORT_EMAIL'));
        $recipient->notify(new SupportAlert($from, $name, $subject, $message));
        
    
        $response['status'] = 1;
        $response['message'] = 'Message sent! Thank you for reaching out to us';
        return response()->json(['response' => $response], 200);
    }
}
