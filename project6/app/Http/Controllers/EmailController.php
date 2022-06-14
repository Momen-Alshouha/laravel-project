<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class EmailController extends Controller
{
    public function create()
    {

        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
         
        ]);

        $data = [
    
          'email' => $request->email,
      
        ];

        Mail::send('pages.home', $data, function($message) use ($data) {
          $message->to($data['email'])
      ;
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
