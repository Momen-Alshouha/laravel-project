<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\mentor_application;

class sendEmail extends Controller
{
    public function store(Request $request)
    {//ahmad code




        
        $m_a=new mentor_application();

        $m = Application::find($request->id);

        $m_a->name = $m->name;
        $m_a->email = $m->email;
        $m_a->age = $m->age;
        $m_a->education = $m->education;
        $m_a->purpose = $m->purpose;
        $m_a->mentor_id = $m->mentor_id;

        $m_a->save();

        
        // $m = Application::find($request->id);
        $m->delete();
        return redirect('/app')->with('success','Application was accepted successfully' );

    }
    
}
