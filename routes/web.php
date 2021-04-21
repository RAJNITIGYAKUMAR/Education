<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
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

Route::get('download',[UserController::class,'downloadData']);
Route::get('teacherpdf',[UserController::class,'getallteacher']);

Route::get('/Logout', function () {
	if(session()->has('user'))
	{
		session()->pull('user',null);
	}
    return redirect('/');
});


Route::view('Course','CourseDetails');
Route::post('registerdata',[UserController::class,'registerdata']);
Route::post('logindata',[UserController::class,'logindata']);
Route::get('/',[CourseController::class,'index']);




Route::get('teacher',[UserController::class,'teacher']);
Route::get('courses',[CourseController::class,'courses']);

Route::get('student',[UserController::class,'student']);


Route::get('edit/{id}',[UserController::class,'editdata']);
Route::get('del/{id}',[UserController::class,'delete']);

Route::post('update',[UserController::class,'updatedata']);


Route::post('addteacher',[UserController::class,'addteacher']);
Route::post('addcourses',[CourseController::class,'addcourses']);

Route::group(['middleware'=>['UserAuth']],function()
{
	Route::get('addcourses',function()
	{	
		return view('addcourses');
	});
	Route::get('addteacher',function()
	{
		return view('addteacher');
	});

	Route::get('dashboard',[CourseController::class,'dashboard']);
});