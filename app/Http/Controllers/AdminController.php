<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\category;
use App\Models\User;


use Illuminate\Http\Request;

class AdminController extends Controller
{
  
    public function index()
    {
        return view('admin.dashboard');
    }

   
    public function show(User $admin)
    {
        $admin = admin::find(1);
        return view('admin.admin_profile', compact('admin'));
    }

    
    public function update(Request $request, User $admin)
    {
        $admin->exists = true;

        $admin->name = $request->post('name');
        $admin->email = $request->post('email');
        $admin->password = $request->post('pass');

        $admin->save();

        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }

}
