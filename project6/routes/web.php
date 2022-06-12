<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\UserM;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MentorRequestController;
use App\Http\Controllers\CategoryController;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/layout', function () {
    return view('pages.layout');
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/show', function () {
    return view('pages.show');
});
 
// Route::get('/profile', function () {
//     return view('pages.profile');
// });


Route::resource('profile',MentorController::class);
Route::post('runEdit',[RegisterController::class,'update']);

// Route::get('editprofile',[MentorController::class,'myedit']);
Route::get('/editprofile', function () {
    return view('pages.editprofile');
});

Route::get('/master', function () {
    return view('admin.master');
});

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::resource('/mentors', MentorRequestController::class);

Route::resource('/category', CategoryController::class);

Route::resource('/addcategory', CategoryController::class);


Auth::routes();

Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('auth');
