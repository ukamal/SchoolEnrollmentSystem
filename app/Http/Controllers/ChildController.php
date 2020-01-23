<?php

namespace App\Http\Controllers;

use App\Child;
use Illuminate\Http\Request;
use App\Result;
use App\Subject;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $children = Child::paginate(5);
        return view('layouts/admin/students/index')->with(compact('children'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $validation = Validator::make($request->all(), [
                'roll' =>  Rule::unique('children')->where(function ($student) use ($request) {
                    return $student->where('class', $request->class)
                        ->where('roll', $request->roll);
                })
            ]);

            if ($validation->fails()) {
                return back()->with('error', 'Student already enrolled on this class');
            }

            $data= $request->all();
            //echo "<pre>"; print_r($data); die;

            $child=new Child();
            $child->name=$data['name'];
            $child->class=$data['class'];
            $child->roll=$data['roll'];
            $child->save();

            return redirect('/result')->with('success','Student Added Successfully!');
        }

        return view('layouts.admin.students.addStudent');
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
     * @param  \App\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function show(Child $child)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function editStudent(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $validation = Validator::make($request->all(), [
                'roll' =>  Rule::unique('children')->where(function ($child) use ($request) {
                    return $child->where('class', $request->class)
                        ->where('roll', $request->roll);
                })
            ]);

            if ($validation->fails()) {
                return back()->with('error', 'Student already enrolled on this class');
            }
            $data=$request->all();
            //echo "<pre>"; print_r($data); die;
            Child::where(['id'=>$id])->update(['name'=>$data['name'],'class'=>$data['class'],'roll'=>$data['roll']]);
            return redirect('/result')->with('success','Student Updated Successfully!');

        }
        $child=Child::where(['id'=>$id])->first();
        return view('layouts.admin.students.edit')->with(compact('child'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Child $child)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $child = Child::find($id);

//        $child->results()->delete();

        $child->delete();

        return redirect('/result')->with('success','Student Deteled Successfully!');
    }


    ///Result
    public function addResult(int $studentId, Request $request){
        $subjects = Subject::all();
        $student = Child::find($studentId);

        if($request->isMethod('post')){
            $data=$request->all();

            $result = new Result();
            $result->student_id = $studentId;
            $result->subject_id = $data['subject_id'];
            $result->marks = $data['marks'];
            $result->save();

            return redirect('/result')->with('success','Result Added Successfully!');
        }

        return view('layouts.admin.result.add_result', compact('subjects', 'student'));
    }

    public function viewResult(int $student_id){

        $child = Child::where('id', $student_id)
            ->with('results.subject')->first();

        return view('layouts.admin.result.view_result', compact('child'));
    }

}
