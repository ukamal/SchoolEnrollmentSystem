<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class allStudentController extends Controller
{
    public function allStudent(){
        $allstudent_info=DB::table('students')->get();

        $manage_student=view('layouts.admin.allStudent.all_student')
            ->with('allstudent_info',$allstudent_info);

        return view('layouts.admin.admin_design')
            ->with('allStudent',$manage_student);
        //return view('layouts.admin.allStudent.all_student');
    }

    //Student Delete Method here
    public function studentDelete($student_id){
        DB::table('students')->where('student_id',$student_id)->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }

    //Student Information view here
    public function viewStudent($student_id){
        $studentView = DB::table('students')->select('*')->where('student_id',$student_id)
            ->first();
        //echo "<pre>"; print_r($studentView); die;
        $studentDetails=view('layouts.admin.student_view')
            ->with('studentDetails',$studentView);
        return view('layouts.admin.admin_design')
            ->with('view',$studentDetails);
    }

    public function studentEdit($student_id){
        $studentEdit = DB::table('students')->select('*')->where('student_id',$student_id)->first();
        //echo "<pre>"; print_r($studentEdit); die;
        $studentUpdate=view('layouts.admin.student_edit')->with('studentUpdate',$studentEdit);

        return view('layouts.admin.admin_design')->with('student_edit',$studentUpdate);
    }

    public function studentUpdate(Request $request,$student_id){
        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_fathername']=$request->student_fathername;
        $data['student_mothername']=$request->student_mothername;
        $data['student_phone']=$request->student_phone;
        $data['student_email']=$request->student_email;
        $data['student_address']=$request->student_address;
        $data['student_year']=$request->student_year;
        $data['student_password']=$request->student_password;

        DB::table('students')->where('student_id',$student_id)->update($data);
        return Redirect::to('allStudent/all_student');
        //echo "<pre>"; print_r($student_id); die;
    }
}
