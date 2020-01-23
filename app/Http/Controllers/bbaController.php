<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class bbaController extends Controller
{
    public function bba(){
        $bbastudent=DB::table('students')
            ->where(['student_department' =>1])->get();

        $manage_student=view('layouts.admin.course.ba')
            ->with('bastudent',$bbastudent);

        return view('layouts.admin.admin_design')
            ->with('bba',$manage_student);
    }
}
