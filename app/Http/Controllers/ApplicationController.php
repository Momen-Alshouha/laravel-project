<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
  
    public function index()
    {
       $data=Application::all();
       return view('admin.applications',compact('data'));
    }

  
    public function store(Request $request)
    { 
        Application::create($request->all());
        return redirect()->back()->with('success','Application Submitted Successfully!');
    }

   
    public function destroy($application)
    {
        $app=Application::find($application);
         $app->delete();
         return redirect()->back()->with('success','Application has been ignored');
    }
}
