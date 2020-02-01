<?php

namespace App\Http\Controllers;

use App\Student;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class StudentController extends Controller
{
    public function userLogin(Request $request){
        $email=$request->student_email;
        $password=md5($request->student_password);
        $result=DB::table('students')->where('student_email',$email)
            ->where('student_password',$password)->first();
        if ($result){
            Session::put('student_email',$result->student_email);
            Session::put('student_id',$result->student_id);
            return redirect('/student-dashboard');
        }else{
            Session::put('exception','email or password invalid');
            return redirect('/');
        }
        //return view('welcome');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.student_dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        $student_id=Session::get('student_id');
        $setting = DB::table('students')->select('*')->where('student_id',$student_id)->first();
        //echo "<pre>"; print_r($setting); die;
        return view('student/student_setting',compact('setting'));
    }

    public function profile(){
        //return view('student.student_profile');
        $student_id = Session::get('student_id');
        $student_profile = DB::table('students')->select('*')->where('student_id',$student_id)->first();
        //echo "<pre>"; print_r($student_profile); die;

        return view('student/student_profile',compact('student_profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student_id=Session::get('student_id');
        $data=array();
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=$request->student_password;

        DB::table('students')->where('student_id',$student_id)->update($data);
        return Redirect::to('student/student_dashboard');
        //echo "<pre>"; print_r($student_id); die;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
    public function contact(){
        return view('contact');
    }


}
