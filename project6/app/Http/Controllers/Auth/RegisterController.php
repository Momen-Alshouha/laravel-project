<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mentor_category'=>$data['ctg'],
            'mentor_about'=>$data['desc']
        ]);
    }
    // public function update(Request $request, User $mentor)
    // {
    //     // $id = $mentor;
    //     // $user = User::find($mentor);
    //     $name = $request->input('name');
    //     $uemail = $request->input('email');
    //     $mentor->update([$name, $uemail]);
    //     // $mentor->save();


    //     // $id = $mentor;
    //     // $user = User::find($id);
      
    //     // $user->name = Request::input('name');
    //     // $user->email = Request::input('email');
      
    //     // // $request->validate([
    //     // //     'name'=>'required',
            
    //     // // ]);
    //     // // $mentor->update($request->all());
    //     // $mentor->save();
    //     // $mentor->update([$request->input('name'),$request->input('email')]);
    //     // $mentor->save();

    //     return view('pages.editprofile')
    //      ->with('success','Movie updated successflly') ;

    // }
}
