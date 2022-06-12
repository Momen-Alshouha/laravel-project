<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class singleMentor extends Controller
{
    public function index()
    {
       $mentor=User::find(1);
       return view('pages.mentorSingle',compact('mentor'));
    }

}
