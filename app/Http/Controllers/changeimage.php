<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class changeimage extends Controller
{
   
    public function update(Request $request, $id)
    {
        if($request->hasfile('img')){

            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('uploads/images/',$filename);
            $user=User::findOrfail($id);
            $user->update(['img'=>$filename]);
            }
        
            return view('pages.editprofile');
    }
}
