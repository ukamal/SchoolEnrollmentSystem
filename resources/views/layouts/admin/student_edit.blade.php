@extends('layouts.admin.admin_design')
@section('dashboard')


    <h1 class="page-title">Edit Student</h1>
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

                    <form class="forms-sample" method="post" action="{{ URL::to('/studentUpdate',$studentUpdate->student_id) }}"> {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Student Name</label>
                            <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp"
                                   value="{{$studentUpdate->student_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student roll</label>
                            <input type="text" class="form-control p-input" name="student_roll"
                                   value="{{$studentUpdate->student_roll}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student father's Name</label>
                            <input type="text" class="form-control p-input" name="student_fathername"
                                   value="{{$studentUpdate->student_fathername}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student Mother's Name</label>
                            <input type="text" class="form-control p-input" name="student_mothername"
                                   value="{{$studentUpdate->student_mothername}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student Email</label>
                            <input type="email" class="form-control p-input" name="student_email"
                                   value="{{$studentUpdate->student_email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student Phone</label>
                            <input type="number" class="form-control p-input" name="student_phone"
                                   value="{{$studentUpdate->student_phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student Address</label>
                            <input type="text" class="form-control p-input" name="student_address"
                                   value="{{$studentUpdate->student_address}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student Admission Year </label>
                            <input type="date" class="form-control p-input" name="student_year"
                                   value="{{$studentUpdate->student_year}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student Password</label>
                            <input type="password" class="form-control p-input" name="student_password"
                                   value="{{$studentUpdate->student_password}}">
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection