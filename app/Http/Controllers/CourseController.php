<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   
    public function index()
    {

        $id = request('id');
       

        if($id) {
             $courses=Course::find($id);
             return view('pages.home',compact('courses'));
        } else {
            $courses=Course::all();
            return view('pages.home',compact('courses'));
        }
   
       

    }

    
    public function create()
    {
        return view('pages.create_course');
    }

  
    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return redirect('create_course')->with('message','course added successfully!');
    }


    public function destroy($id)
    {
        $course->destroy($id);
        return view('pages.home');
    }
}
