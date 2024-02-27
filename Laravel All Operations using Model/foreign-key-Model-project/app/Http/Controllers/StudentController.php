<?php

namespace App\Http\Controllers;

use App\Models\classs;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addstudentform()
    {
        $student = classs::get();
        return view('add',compact('student'));

    }
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
        $student = Student::create(
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
        $student = Student::join('class_data','student_data.class','=','class_data.cid')->get();
        return view('index',compact('student'));

    }

    public function deleteStudent(string $id)
    {
        $student = Student::find($id)->delete();
        if ($student)
        {
            return redirect()->route('home')->with('denger', 'Student Deleted Successfully');
        }

    }

    public function singleStudent(string $id)
    {
        $student = Student::join('class_data','student_data.class','=','class_data.cid')->find($id);
        return view('view',compact('student'));

    }


    public function updatePage(string $id)
    {
        $student = Student::find($id);
        $student1 = classs::get();
        return view('update',compact('student','student1'));

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

        $student = Student::find($id)
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
