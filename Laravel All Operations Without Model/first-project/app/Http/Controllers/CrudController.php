<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
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
        $student = DB::table('student_data')->insert(
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

        if ($student)
        {
            return redirect()->route('home')->with('success', 'Student Added Successfully');
        }
          
    }

    public function ShowStudent()
    {
        $student = DB::table('student_data')->get();
        return view('index',['data' => $student]);

    }

    public function deleteStudent(string $id)
    {
        $student = DB::table('student_data')->where('id', $id)->delete();
        if ($student)
        {
            return redirect()->route('home')->with('denger', 'Student Deleted Successfully');
        }

    }

    public function singleStudent(string $id)
    {
        $student = DB::table('student_data')->find($id);
        return view('view',['data' => $student]);

    }


    public function updatePage(string $id)
    {
        $student = DB::table('student_data')->find($id);
        return view('update',['data' => $student]);

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

        $student = DB::table('student_data')
                ->where('id', $id)
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

        if ($student)
        {
            return redirect()->route('home')->with('success', 'Student Updated Successfully');
        }
          
    }
}
