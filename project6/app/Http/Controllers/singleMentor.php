<?php

namespace App\Http\Controllers;

use App\Mail\ContactMentorMail;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ;

class singleMentor extends Controller
{
    public function index()
    {
       $mentor=User::find(4);
       return view('pages.mentorSingle',compact('mentor'));
    }

    public function sendmail(Request $request){

        // // $mentor=User::find($request->id);
        // $details=[
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'message' => $request->msg,
        // ];
        // Mail::to( ')->send(new ContactMentorMail($details));

        // return redirect()->route('mentorSingle.index')->with('success','Message Send Successfully');

    }

}
