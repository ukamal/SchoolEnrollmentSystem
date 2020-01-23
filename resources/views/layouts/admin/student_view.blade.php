@extends('layouts.admin.admin_design')

@php
    function convert_department($value){
        $value=[
            1=>'BA',
            2=>'BBA',
            3=>'BSC',
            4=>'BSS',
            5=>'CSE',
        ];
        return $value[$value];
    }
@endphp

@section('dashboard')
<!-- partial -->

    <h1 class="page-title">Student Profile</h1>
    <div class="row user-profile">
        <div class="col-lg-6 side-left">
            <div class="card mb-4">
                <div class="card-body avatar">
                    <h3 class="text-center" style="font-weight: bolder;font-family: cursive">Institute Of Science & Technology</h3>
                    <img src="{{ url($studentDetails->student_image) }}" alt="">
                    <p class="name">{{ $studentDetails->student_name }}</p>
                    <p class="designation">{{ $studentDetails->student_department }}</p>
                    <a class="email" href="#">{{ $studentDetails->student_phone }}</a>
                    <a class="number" href="#">{{ $studentDetails->student_email }}</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body overview">
                    <ul class="achivements">
                        <li><p>34</p><p>Projects</p></li>
                        <li><p>23</p><p>Task</p></li>
                        <li><p>29</p><p>Completed</p></li>
                    </ul>
                    <div class="wrapper about-user">
                        <h2 class="card-title mt-4 mb-3">About</h2>
                        <p>Student full Information below:</p>
                    </div>
                    <div class="info-links">
                        <a class="website">
                            <i class="icon-globe icon"> Roll No:</i>
                            <span>{{ $studentDetails->student_roll }}</span>
                        </a>
                        <a class="website">
                            <i class="icon-globe icon">Department:</i>
                            <span>{{ $studentDetails->student_department }}</span>
{{--                            <span>{{ convert_department($studentDetails->student_department) }}</span>--}}
                        </a>
                        <a class="website">
                            <i class="icon-globe icon">Father's Name:</i>
                            <span>{{ $studentDetails->student_fathername }}</span>
                        </a>
                        <a class="website">
                            <i class="icon-globe icon">Mother's Name:</i>
                            <span>{{ $studentDetails->student_mothername }}</span>
                        </a>
                        <a class="website">
                            <i class="icon-globe icon">Address:</i>
                            <span>{{ $studentDetails->student_address }}</span>
                        </a>
                        <a class="website">
                            <i class="icon-globe icon">Admission Year:</i>
                            <span>{{ $studentDetails->student_year }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- content-wrapper ends -->

@endsection