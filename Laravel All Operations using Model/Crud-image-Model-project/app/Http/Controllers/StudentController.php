<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'image'=>'required|mimes:png,jpg,jpeg,webp,gif',
            
        ]);

        if($req->has('image'))
        {
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/images/';
            $file->move(public_path($path), $filename);
        }
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
                        'image'=>$path.$filename,

                    ]
                    );

        if ($students)
        {
            return redirect()->route('home')->with('success', 'Student Added Successfully');
        }
          
    }

    public function ShowStudent()
    {
        $students = student::get();
        return view('index',compact('students'));

    }

    public function deleteStudent(string $id)
    {
        $students = student::findorFail($id);

        if(File::exists($students->image))
            {
                File::delete($students->image);
            }
            
        $students->delete();

        if ($students)
        {
            return redirect()->route('home')->with('denger', 'Student Deleted Successfully');
        }

    }

    public function singleStudent(string $id)
    {
        $students = student::findorFail($id);
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
            'image'=>'required|mimes:png,jpg,jpeg,webp,gif',
            
            
        ]);

        $students = Student::findorFail($id);

        if($req->has('image'))
        {
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/images/';
            $file->move(public_path($path), $filename);

            if(File::exists($students->image))
            {
                File::delete($students->image);
            }
        }

       
        $students->update(
                    [
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'password'=>$req->password,
                        'class'=>$req->class,
                        'language'=>implode(',',$req->language),
                        'gender'=>$req->gender,
                        'phone'=>$req->phone,
                        'address'=>$req->address,
                        'image'=>$path.$filename,

                    ]
                    );

        if ($students)
        {
            return redirect()->route('home')->with('success', 'Student Updated Successfully');
        }
          
    }
}
