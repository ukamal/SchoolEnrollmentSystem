@extends('layouts.admin.admin_design')
@section('dashboard')

    @extends('layouts.admin.admin_design')
@section('dashboard')


    <h1 class="page-title">Add Teacher</h1>
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

                    <form class="forms-sample" method="post" action="{{ URL::to('/saveTeacher') }}" enctype="multipart/form-data"> {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Teacher Name</label>
                            <input type="text" class="form-control p-input" name="teacher_name" id="student_name" aria-describedby="emailHelp" placeholder="Enter student name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Teacher Phone</label>
                            <input type="number" class="form-control p-input" name="teacher_phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Teacher Department</label>
                            <select id="student_department" class="form-control p-input" name="teacher_department">
                                <option value="1">BA</option>
                                <option value="2">BBA</option>
                                <option value="3">BSC</option>
                                <option value="4">BSS</option>
                                <option value="5">CSE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Teacher Address</label>
                            <input type="text" class="form-control p-input" name="teacher_address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label>Upload file</label>
                            <div class="row">
                                <div class="col-12">
                                    <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                    <input type="file" class="form-control-file" name="teacher_image" id="exampleInputFile2" aria-describedby="fileHelp">
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

@endsection
