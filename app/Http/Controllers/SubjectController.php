<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::latest()->paginate(5);
        //$subjects = Subject::get();
        return view('layouts.admin.subjects.view_subject')->with(compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addSubject(Request $request)
    {

        if($request->isMethod('post')){
            $data=$request->all();
            //echo "<pre>"; print_r($data); die;

            $subject=new Subject();
            $subject->name=$data['name'];
            $subject->save();
            return redirect('/subjects')->with('success','Subject Added Successfully!');
        }

        return view('layouts.admin.subjects.add_subject');


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
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data=$request->all();
            //echo "<pre>"; print_r($data); die;
            Subject::where(['id'=>$id])->update(['name'=>$data['name']]);
            return redirect('/subjects')->with('success','Subject Updated Successfully!');

        }
        $subjects = Subject::where(['id'=>$id])->first();
        return view('subjects.edit_subject')->with(compact('subjects'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = null)
    {
        if(!empty($id)){
            Subject::where(['id'=>$id])->delete();
            return redirect('/subjects')->with('success','Subject Deteled Successfully!');
        }
    }
}
