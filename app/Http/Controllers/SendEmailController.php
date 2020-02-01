<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function send(Request $request){
        $this->validate($request,[
            'name'  =>  'required',
            'email'  =>  'required',
            'subject'  =>  'required',
            'message'  =>  'required',
        ]);

       $name = $request->name;
       $email = $request->email;
       $subject = $request->subject;
       $message = $request->message;

        Mail::to($email)->send(new SendMail($name, $subject, $message));
        return back()->with('success','Thanks for contracting us!');
    }
}
