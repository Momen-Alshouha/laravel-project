<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

 

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
 
Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/editprofile', function () {
    return view('pages.editprofile');
});

Route::get('/master', function () {
    return view('admin.master');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/requests', function () {
    return view('admin.requests');
});


Route::get('/category', function () {
    return view('admin.category');
});

Route::get('/approved', function () {
    return view('admin.Approved');
});

Route::get('/addcategory', function () {
    return view('admin.addcategory');
});



Auth::routes();

Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('auth');
