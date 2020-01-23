<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_name','student_roll','student_fathername','student_mothername','student_email','student_phone','student_department',
        'student_address','student_year','student_password','student_image',
    ];
}
