<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addStudent(Request $req)
    {
        $req->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'confpassword'=>'required|same:password|min:8',
            'gender'=>'required',
            'address'=>'required',
            'class'=>'required',
            'phone'=>'required|numeric|digits:10',
            
        ]);
        $student = DB::table('students')->insert(
                    [
                        
                        'id'=>rand(111,999999999),
                        'fname'=>$req->fname,
                        'lname'=>$req->lname,
                        'email'=>$req->email,
                        'password'=>$req->password,
                        'confpassword'=>$req->confpassword,
                        'gender'=>$req->gender,
                        'address'=>$req->address,
                        'class'=>$req->class,
                        'phone'=>$req->phone,

                    ]
                    );

        if ($student)
        {
            return redirect()->route('home')->with('success', 'Student Added Successfully');
        }
          
    }

    public function ShowStudent()
    {
        $student = DB::table('students')->get();
        return view('index',['data' => $student]);

    }

    public function deleteStudent(string $id)
    {
        $student = DB::table('students')->where('id', $id)->delete();
        if ($student)
        {
            return redirect()->route('home')->with('denger', 'Student Deleted Successfully');
        }

    }

    public function singleStudent(string $id)
    {
        $student = DB::table('students')->find($id);
        return view('view',['student' => $student]);

    }


    public function updatePage(string $id)
    {
        $student = DB::table('students')->find($id);
        return view('update',['data' => $student]);

    }

    public function updateStudent(Request $req , $id)
    {
        $req->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'confpassword'=>'required|min:8',
            'gender'=>'required',
            'address'=>'required',
            'class'=>'required',
            'phone'=>'required|numeric|digits:10',
            
            
        ]);

        $student = DB::table('students')
                ->where('id', $id)
                ->update(
                    [
                        'fname'=>$req->fname,
                        'lname'=>$req->lname,
                        'email'=>$req->email,
                        'password'=>$req->password,
                        'confpassword'=>$req->confpassword,
                        'gender'=>$req->gender,
                        'address'=>$req->address,
                        'class'=>$req->class,
                        'phone'=>$req->phone,

                    ]
                    );

        if ($student)
        {
            return redirect()->route('home')->with('success', 'Student Updated Successfully');
        }
          
    }
}
