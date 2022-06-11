<?php

use Illuminate\Support\Facades\Route;
 

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
 
 

Auth::routes();

Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('auth');
