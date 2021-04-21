<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PDF;


class UserController extends Controller
{
    function getallteacher()
    {
      $data=Teacher::all();
      return view('teacherpdf',['teacher'=>$data]);
    }
    function downloadData()
    {
      $teacher=Teacher::all();
      $pdf=PDF::loadView('teacherpdf',compact('teacher'));
      return $pdf->download('teacher.pdf');
    }




    function registerdata(Request $req)
    {
    	$data=new User;
      $data->name=$req->name;
    	$data->email=$req->email;
    	$data->password=Hash::make($req->password);
    	$data->phone=$req->phone;
    	$data->save();

    	return redirect('/');
    }

    
    function logindata(Request $req)
    {
    	$user=User::where(['email'=>$req->email])->first();
       if(!$user || !Hash::check($req->password,$user->password))
       {
           
           return redirect('/');
       }
       else
       {
           $req->session()->put('user', $user);

           return redirect('dashboard');
       }
    }

    function teacher()
    {
      if(session()->has('user'))
      {
        $data=Teacher::all();
      return view('teacher',['teacher'=>$data]);
      }
      return redirect('/');
    }

   function student()
    {
      if(session()->has('user'))
      {
        $data=User::all();
      return view('student',['student'=>$data]);
      }
      return redirect('/');
    }


    function addteacher(Request $req)
    {
       $data=new Teacher;
      $data->name=$req->name;
      $data->email=$req->email;
      $data->Education=$req->education;
      $data->Mobile=$req->mobile;
      $data->Salary=$req->salary;
      $data->DOB=$req->DOB;
      $data->DOJ=$req->DOJ;
      $data->save();

      Mail::send('teacherMail',$data->toArray(),function($message){
        $message->to('saundaryraj@gmail.com','Education')->subject('Teacher Add ');
      });
      
      return redirect('teacher');
    }


    function delete()
    {

    }
    function editdata($id)
    {
      $data=Teacher::find($id);
        return view('updatedata',['item'=>$data]);
    }
    function updatedata(Request $req)
    {
        $data=Teacher::find($req->input('id'));
        $data->name=$req->input('name');
        $data->email=$req->input('email');
        $data->Education=$req->input('education');
        $data->Salary=$req->input('salary');
        $data->DOB=$req->input('DOB');
        $data->DOJ=$req->input('DOJ');
        $data->save();
        return redirect('teacher');
    }
}
