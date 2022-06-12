<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
namespace App\Http\Controllers;
use App\Models\mentor;
use App\Models\mentor_request;
use App\Models\User;

use Illuminate\Http\Request;

class MentorController extends Controller
{

    public function index()
    {
        $users = User::all();
    return view('pages.show', compact('users')); 
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
        // Auth::logout();
 
        // request()->session()->invalidate();
     
        // request()->session()->regenerateToken();
     
        // return redirect('pages.home');
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show(User $mentor)
    {
        return view('pages.editprofile',compact('mentor'));
    }

    public function edit(User $mentor)
    {
        return view('pages.profile',compact('mentor'));
    }    
  
    public function update(Request $request, User $mentor)
    {
         $delete = User::find($mentor)->delete();
     
        // $mentor->update($request->all());

        // $user=User::find($mentor);
        $mentor->name = $request['name'];
        $mentor->email = $request['email'];
        $mentor->img = $request['img'];
        $mentor->password = $request['password'];
        $mentor->mentor_category = $request['mentor_category'];
        $mentor->mentor_about = $request['mentor_about'];
        $mentor->save();
        
        // $id = $mentor;
        // $user = User::find($mentor);
        // $name = $request->input('name');
        // $uemail = $request->input('email');  mentor_category
        // $user = Auth::user();
        // $mentor->name = Request::input('name');
        // $mentor->email = Request::input('email');
        // $mentor->password = Request::except('password');
        // $mentor->password = Request::except('mentor_category');
        // $mentor->password = Request::except('mentor_about');


        // $mentor->update([$mentor->name,  $mentor->email]);

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

  
    public function destroy(mentor $mentor)
    {
        $mentor->delete();
        return redirect('home');
    }
}
