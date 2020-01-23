<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tutionFeeController extends Controller
{
    public function tutionFee(){
        return view('layouts.admin.allStudent.tution_fee');
    }
}
