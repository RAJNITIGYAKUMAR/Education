<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
class CourseController extends Controller
{
    function index()
    {
    	return view('Home');
    }
    function dashboard()
    {
      $course=DB::table('courses')->count();
      $teacher=DB::table('teachers')->count();
      return view('dashboard',['course'=>$course,'teacher'=>$teacher]);
    }

    function courses()
    {
    	if(session()->has('user'))
    	{
    		$data=Course::all();
    	return view('courses',['course'=>$data]);
    	}
    	return redirect('/');
    	
    }

    
    function addcourses(Request $req)
    {
     $data=new Course;
      $data->name=$req->name;
      $data->category=$req->category;
      $data->description=$req->description;
      $data->price=$req->fee;
      $data->language=$req->language;
      $data->save();
      return redirect('courses');
    }
}
