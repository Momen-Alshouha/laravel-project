<?php
namespace App\Http\Controllers\Auth;
// namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;

use App\Models\mentor;
use App\Models\User;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
    //    return view('pages.profile', compact('user')); 
    }
    public function getMentor()
    {
        $user = User::find();
       return view('pages.profile', compact('user')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function show(User $mentor)
    {
        return view('pages.editprofile',compact('mentor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function edit(User $mentor)
    {
        return view('pages.profile',compact('mentor'));
    }    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $mentor)
    {
        // $id = $mentor;
        // $user = User::find($mentor);
        $name = $request->input('name');
        $uemail = $request->input('email');
        $mentor->update([$name, $uemail]);
        $mentor->save();


        // $id = $mentor;
        // $user = User::find($id);
      
        // $user->name = Request::input('name');
        // $user->email = Request::input('email');
      
        // // $request->validate([
        // //     'name'=>'required',
            
        // // ]);
        // // $mentor->update($request->all());
        // $mentor->save();
        // $mentor->update([$request->input('name'),$request->input('email')]);
        // $mentor->save();

        return view('pages.editprofile')
         ->with('success','Movie updated successflly') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function destroy(mentor $mentor)
    {
        //
    }
}
