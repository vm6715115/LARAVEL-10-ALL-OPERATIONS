<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = DB::table('students')->get();
        return view('index',['data' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'class'=>'required',
            'language'=>'required',
            'gender'=>'required',
            'phone'=>'required|numeric|digits:10',
            'address'=>'required',
            
        ]);
        $student = DB::table('students')->insert(
                    [
                        
                        'id'=>rand(111,999999999),
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'password'=>$request->password,
                        'class'=>$request->class,
                        'language'=>implode(',',$request->language),
                        'gender'=>$request->gender,
                        'phone'=>$request->phone,
                        'address'=>$request->address,

                    ]
                    );

        if ($student)
        {
            return redirect()->route('students.index')->with('success', 'Student Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = DB::table('students')->find($id);
        return view('view',['student' => $student]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = DB::table('students')->find($id);
        return view('update',['data' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'class'=>'required',
            'language'=>'required',
            'gender'=>'required',
            'phone'=>'required|numeric|digits:10',
            'address'=>'required',
            
            
        ]);

        $student = DB::table('students')
                ->where('id', $id)
                ->update(
                    [
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'password'=>$request->password,
                        'class'=>$request->class,
                        'language'=>implode(',',$request->language),
                        'gender'=>$request->gender,
                        'phone'=>$request->phone,
                        'address'=>$request->address,

                    ]
                    );

        if ($student)
        {
            return redirect()->route('students.index')->with('success', 'Student Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = DB::table('students')->where('id', $id)->delete();
        if ($student)
        {
            return redirect()->route('students.index')->with('denger', 'Student Deleted Successfully');
        }
    }
}
