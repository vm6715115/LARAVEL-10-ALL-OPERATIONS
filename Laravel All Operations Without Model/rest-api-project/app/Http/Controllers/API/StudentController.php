<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function addStudent(Request $req)
    {
        $validator = validator::make($req->all(),[
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
        if($validator->fails())
        {
            $result = array('status' => true, 'message' =>'Validation error occurred','error_message' => $validator->errors());
            return response()->json($result,400);
        }
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
            $result = array('status'=>true, 'message'=>"Student created successfully", "data"=>$student);
            $responsecode = 200; //success
        }
        else
        {
            $result = array('status'=>false, 'message'=>"Something went wrong!", "data"=>$student);
            $responsecode = 400; //bad request
        }
        return response()->json($result,$responsecode);
          
    }

    public function ShowStudent()
    {
        $student = DB::table('students')->get();
        $result = array('status'=>true, 'message'=>count($student)." students fetched", "data"=>$student);
        $responsecode = 200;
        return response()->json($result,$responsecode);

    }

    public function deleteStudent(string $id)
    {
        $student = DB::table('students');
        if (!$student->find($id))
        {
            return response()->json(['status'=>false, 'message'=>"student not found"],404);
        }
        else
        {
            $student->where('id',$id)->delete();
            $result = array('status'=>true, 'message'=>"student deleted successfully");
            $responsecode = 200;
            return response()->json($result,$responsecode);
        }
    }

    public function singleStudent(string $id)
    {
        $student = DB::table('students')->find($id);

        if(!$student)
        {
            return response()->json(['status'=>false, 'message'=>"student not found"],404);
        }
       
        $result = array('status'=>true, 'message'=>"student found", "data"=>$student);
        $responsecode = 200;
        return response()->json($result,$responsecode);
        

    }

    public function updateStudent(Request $req , $id)
    {
        $validator = validator::make($req->all(),[
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
        if($validator->fails())
        {
            $result = array('status' => true, 'message' =>'Validation error occurred','error_message' => $validator->errors());
            return response()->json($result,400);
        }
        $student = DB::table('students') ->where('id', $id)->update(
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

            ]);

        if ($student)
        {
            $result = array('status'=>true, 'message'=>"Student updated successfully", "data"=>$student);
            $responsecode = 200; //success
        }
        else
        {
            $result = array('status'=>false, 'message'=>"Something went wrong!", "data"=>$student);
            $responsecode = 400; //bad request
        }
        return response()->json($result,$responsecode);
          
    }
}
