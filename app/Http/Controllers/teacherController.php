<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Session;
use DB;

class teacherController extends Controller
{
    public function allTeacher(){
        $teachers =DB::table('teachers')->get();
        $manage_student=view('layouts.admin.teachers.all_teacher')
            ->with('teachers',$teachers);

        return view('layouts.admin.admin_design')
            ->with('allStudent',$manage_student);
        return view('layouts.admin.teachers.all_teacher');
    }
    public function addTeacher(){
        return view('layouts.admin.teachers.add_teacher');
    }
    public function saveTeacher(Request $request){
        $teachers = new Teacher;
        $data=array();
        $data['teacher_name']=$request->teacher_name;
        $data['teacher_phone']=$request->teacher_phone;
        $data['teacher_department']=$request->teacher_department;
        $data['teacher_address']=$request->teacher_address;
        $image=$request->file('teacher_image');

        if ($image){
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success){
                $data['teacher_image']=$image_url;
                DB::table('teachers')->insert($data);
                session::put('exception','teacher added successfully!!');
                return Redirect('teachers/all_teacher');
            }
        }
        $data['image']=$image_url;
        DB::table('teachers')->insert($data);
        Session::put('exception','teacher added successfully');
        return Redirect('teachers/all_teacher');

        DB::table('students')->insert($data);
        Session::put('exception','teacher added successfully');
        return Redirect('teachers/all_teacher');
    }

    public function delTeacher($id){
            DB::table('teachers')->where('id',$id)->delete();
            return redirect()->back();

    }

}
