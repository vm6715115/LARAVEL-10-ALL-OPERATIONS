<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'class'=>'required',
            'language'=>'required',
            'gender'=>'required',
            'phone'=>'required|numeric|digits:10',
            'address'=>'required',
            
        ]);
        $students = Student::create(
                    [
                        
                        'id'=>rand(111,999999999),
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'password'=>$req->password,
                        'class'=>$req->class,
                        'language'=>implode(',',$req->language),
                        'gender'=>$req->gender,
                        'phone'=>$req->phone,
                        'address'=>$req->address,

                    ]
                    );

        if ($students)
        {
            return redirect()->route('home')->with('success', 'Student Added Successfully');
        }
          
    }

    public function ShowStudent()
    {
        $students = Student::get();
        return view('index',compact('students'));

    }

    public function deleteStudent(string $id)
    {
        $students = Student::findorFail($id)->delete();
        if ($students)
        {
            return redirect()->route('home')->with('denger', 'Student Deleted Successfully');
        }

    }

    public function singleStudent(string $id)
    {
        $students =student::find($id);
        return view('view',compact('students'));

    }


    public function updatePage(string $id)
    {
        $students = student::find($id);
        return view('update',compact('students'));

    }

    public function updateStudent(Request $req , $id)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'class'=>'required',
            'language'=>'required',
            'gender'=>'required',
            'phone'=>'required|numeric|digits:10',
            'address'=>'required',
            
            
        ]);

        $students = student::findorFail($id)
                ->update(
                    [
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'password'=>$req->password,
                        'class'=>$req->class,
                        'language'=>implode(',',$req->language),
                        'gender'=>$req->gender,
                        'phone'=>$req->phone,
                        'address'=>$req->address,

                    ]
                    );

        if ($students)
        {
            return redirect()->route('home')->with('success', 'Student Updated Successfully');
        }
          
    }
}
