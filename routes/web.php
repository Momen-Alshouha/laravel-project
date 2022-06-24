<?php
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\changeimage;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserM;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MentorRequestController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\singleMentor;
use App\Http\Controllers\categoryShowController;
use App\Http\Controllers\PostControlle;
use App\Http\Controllers\sendEmail;
use App\Http\Controllers\PostAdminController;
use App\Http\Controllers\CommentController;

Route::resource('send-mail', sendEmail::class);
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/show', function () {
    return view('pages.show');
});
 

Route::get('/',[categoryShowController::class,'index']);
Route::resource('/posts', PostControlle::class);
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
Route::resource('profile',MentorController::class);

Route::resource('image',changeimage::class);
 


Route::post('edit_profile',[MentorController::class,'update_mentor']);


Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/admin_profile', [AdminController::class,'show']);

Route::put('/edit_admin/{admin}', [AdminController::class,'update']);


Route::get('/dashboard', [AdminController::class,'index']);

Route::resource('/mentors', MentorRequestController::class);

Route::resource('/category', CategoryController::class);
Route::resource('/post', postAdminController::class);

Route::get('/addcategory', [CategoryController::class,'create']);

Route::get('/home', 'App\Http\Controllers\EmailController@create');

Route::post('/home', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');

Auth::routes();

Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('auth');

Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('/mentorSingle/{id}', [singleMentor::class,'index']);

Route::get('/course', [CourseController::class,'index']);

Route::get('/course/{id}', [CourseController::class,'index']);

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/create_course', function () {
    return view('pages.create_course');
});

Route::post('application',[ApplicationController::class,'store']);

Route::get('/app', [ApplicationController::class,'index']);

Route::delete('/app/{id}', [ApplicationController::class,'destroy']);

Route::get('/momen/{id}', [CourseController::class,'index']);

Route::get('/momen', [CourseController::class,'index']);