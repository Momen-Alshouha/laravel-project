<?php

namespace App\Http\Controllers;

use App\Models\mentor_application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MentorApplicationController extends Controller
{


  
    public function show(mentor_application $mentor_application)
    { 
        return view('pages.profile');

    }


    public function destroy(mentor_application $mentor_application)
    {
        $app=mentor_application::find($mentor_application);
    $app->delete();
        return redirect()->to('mapp.show')->with('success','Applicant has been deleted');
    }
}
