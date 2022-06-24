<?php

namespace App\Http\Controllers;

use App\Models\mentor_request;
use Illuminate\Http\Request;
use App\Models\User;

class MentorRequestController extends Controller
{
   
    public function index()
    {
        $data = User::all();
        return view('admin.mentors',compact('data'));
    }


    public function destroy($mentor_request)
    {
        $m = User::find($mentor_request);
        $m->delete();
        return redirect()->back()->with('status', 'Mentor Deleted Successfully');
   
    }
}
