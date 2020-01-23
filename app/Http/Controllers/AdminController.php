<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();



class AdminController extends Controller
{
    public function adminLogin(Request $request){
        $email=$request->email;
        $password=md5($request->password);
        $result =DB::table('admins')->where('email',$email)
            ->where('password',$password)->first();
        //echo "<pre>"; print_r($result); die;
        return view('admin.admin_login');
//        if ($result){
//            Session::put('email',$result->email);
//            Session::put('id',$result->id);
//            return redirect::to('adminLogin');
//
//        }else{
//            Session::put('exception','Email or Password invalid');
//            return redirect::to('/admin');
//
//        }
    }

    public function logout(){
        return redirect('/');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
//
    }
}
