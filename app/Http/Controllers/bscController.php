<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class bscController extends Controller
{
    public function bsc(){
        $bastudent=DB::table('students')
            ->where(['student_department' =>1])->get();

        $manage_student=view('layouts.admin.course.ba')
            ->with('bastudent',$bastudent);

        return view('layouts.admin.admin_design')
            ->with('ba',$manage_student);
    }
}
