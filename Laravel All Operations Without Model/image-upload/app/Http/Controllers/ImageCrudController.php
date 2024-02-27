<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ImageCrudController extends Controller
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
            'image'=>'required|mimes:png,jpg,jpeg,webp,gif',
            
        ]);

        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $file_extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $file_extension;
            $path = '/uploads/images/';
            $file->move(public_path($path), $filename);
        }
        $student = DB::table('images')->insert(
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
                        'image' => $path . $filename,
                    ]
                    );

        if ($student)
        {
            return redirect()->route('home')->with('success', 'Student Added Successfully'); 
        }
          
    }

    public function ShowStudent()
    {
        $student = DB::table('images')->get();
        return view('index',['data' => $student]);

    }

    public function deleteStudent(string $id)
    {
        $oldImagePath = DB::table('images')->where('id', $id)->value('image');

         // Unlink the old image if it exists
         if ($oldImagePath && file_exists(public_path($oldImagePath))) {
            unlink(public_path($oldImagePath));
        }

        $student = DB::table('images')->where('id', $id)->delete();
        if ($student)
        {
            return redirect()->route('home')->with('denger', 'Student Deleted Successfully');
        }

    }

    public function singleStudent(string $id)
    {
        $student = DB::table('images')->find($id);
        return view('view',['student' => $student]);

    }


    public function updatePage(string $id)
    {
        $student = DB::table('images')->find($id);
        return view('update',['data' => $student]);

    }

    public function updateStudent(Request $req, $id)
    {  
    $req->validate([
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'confpassword' => 'required|min:8',
        'gender' => 'required',
        'address' => 'required',
        'class' => 'required',
        'phone' => 'required|numeric|digits:10',
        'image' => 'nullable|mimes:png,jpg,jpeg,webp,gif'
    ]);

    if ($req->hasFile('image')) {
        $file = $req->file('image');
        $file_extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $file_extension;
        $path = '/uploads/images/';
        $file->move(public_path($path), $filename);
        
        // Retrieve the old image path
        $oldImagePath = DB::table('images')->where('id', $id)->value('image');
        // Unlink the old image if it exists
        if ($oldImagePath && file_exists(public_path($oldImagePath))) {
            unlink(public_path($oldImagePath));
        }

        // Update student record with the new image path
        DB::table('images')
            ->where('id', $id)
            ->update([
                'fname' => $req->fname,
                'lname' => $req->lname,
                'email' => $req->email,
                'password' => $req->password,
                'confpassword' => $req->confpassword,
                'gender' => $req->gender,
                'address' => $req->address,
                'class' => $req->class,
                'phone' => $req->phone,
                'image' => $path . $filename,
            ]);

        return redirect()->route('home')->with('success', 'Student Updated Successfully');
    }
    }
          
}
