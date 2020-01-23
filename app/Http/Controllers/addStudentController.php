<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class addStudentController extends Controller
{
    public function addStudent(){
        return view('layouts.admin.allStudent.add_student');
    }

    public function saveStudent(Request $request){
        $student = new Student;
        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_fathername']=$request->student_fathername;
        $data['student_mothername']=$request->student_mothername;
        $data['student_email']=$request->student_email;
        $data['student_phone']=$request->student_phone;
        $data['student_department']=$request->student_department;
        $data['student_address']=$request->student_address;
        $data['student_year']=$request->student_year;
        $data['student_password']=md5($request->student_password);
        $image=$request->file('student_image');

        if ($image){
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success){
                $data['student_image']=$image_url;
                DB::table('students')->insert($data);
                session::put('exception','student added successfully!!');
                return Redirect('allStudent/all_student');
            }
        }
        $data['image']=$image_url;
        DB::table('students')->insert($data);
        Session::put('exception','student added successfully');
        return Redirect()->back();

        DB::table('students')->insert($data);
        Session::put('exception','student added successfully');
        return Redirect()->back();
    }

}
