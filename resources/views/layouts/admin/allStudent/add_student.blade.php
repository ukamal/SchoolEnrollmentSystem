@extends('layouts.admin.admin_design')
@section('dashboard')


           <h1 class="page-title">Add Student</h1>
           <p class="alert-danger">
               <?php
                   $exception=Session::put('exception');
                   if ($exception){
                       echo $exception;
                       Session::put('exception',null);
                   }
               ?>
           </p>
           <div class="row">
               <div class="col-12 col-lg-6 grid-margin">
                   <div class="card">
                       <div class="card-body">

                           <form class="forms-sample" method="post" action="{{ URL::to('/saveStudent') }}" enctype="multipart/form-data"> {{ csrf_field() }}
                               <div class="form-group">
                                   <label for="exampleInputEmail1">Student Name</label>
                                   <input type="text" class="form-control p-input" name="student_name" id="student_name" aria-describedby="emailHelp" placeholder="Enter student name">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputPassword1">Student roll</label>
                                   <input type="text" class="form-control p-input" name="student_roll" placeholder="Student Roll">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputPassword1">Student father's Name</label>
                                   <input type="text" class="form-control p-input" name="student_fathername" placeholder="Father's Name">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputPassword1">Student Mother's Name</label>
                                   <input type="text" class="form-control p-input" name="student_mothername" placeholder="Mother's Name">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputPassword1">Student Email</label>
                                   <input type="email" class="form-control p-input" name="student_email" placeholder="Student Email">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputPassword1">Student Phone</label>
                                   <input type="number" class="form-control p-input" name="student_phone" placeholder="Phone">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputPassword1">Student Department</label>
                                   <select id="student_department" class="form-control p-input" name="student_department">
                                       <option value="1">BA</option>
                                       <option value="2">BBA</option>
                                       <option value="3">BSC</option>
                                       <option value="4">BSS</option>
                                       <option value="5">CSE</option>
                                   </select>
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputPassword1">Student Address</label>
                                   <input type="text" class="form-control p-input" name="student_address" placeholder="Address">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputPassword1">Student Admission Year </label>
                                   <input type="date" class="form-control p-input" name="student_year" placeholder="Passing Year's">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputPassword1">Student Password</label>
                                   <input type="password" class="form-control p-input" name="student_password" placeholder="Password">
                               </div>
                               <div class="form-group">
                                   <label>Upload file</label>
                                   <div class="row">
                                       <div class="col-12">
                                           <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                           <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                           <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                       </div>
                                   </div>
                               </div>
                               <button type="submit" class="btn btn-success btn-block">Submit</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>


@endsection