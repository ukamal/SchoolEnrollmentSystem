@extends('layouts.admin.admin_design')
@section('dashboard')
    <!-- partial -->

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Data table</h2>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                        <tr>
                            <th>st_roll #</th>
                            <th>st_name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Department</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allstudent_info as $student)
                        <tr>
                            <td>{{ $student->student_roll }}</td>
                            <td>{{ $student->student_name }}</td>
                            <td>{{ $student->student_phone }}</td>
                            <td>{{ $student->student_address }}</td>
                            <td>
                                @if($student->student_department==0)
                                    <span class="label label-success">{{'BSS'}}</span>
                                    @elseif($student->student_department==1)
                                    <span class="label label-success">{{'CSE'}}</span>
                                    @elseif($student->student_department==2)
                                    <span class="label label-success">{{'EEE'}}</span>
                                    @elseif($student->student_department==3)
                                    <span class="label label-success">{{'ACC'}}</span>
                                @else
                                    <span class="label label-important">{{ 'Not defined' }}</span>
                                @endif
                            </td>
                            <td><img src="{{url($student->student_image)}}" style="width: 80px;height: 90px" alt=""></td>
                            <td>
                                <a href="{{ url('/viewStudent/'.$student->student_id) }}">
                                    <button class="btn btn-outline-primary">View</button>
                                </a>
                                <a href="{{ url('/studentEdit/'.$student->student_id) }}">
                                    <button class="btn btn-outline-success">Edit</button>
                                </a>
                                <a href="{{ url('/studentDelete/'.$student->student_id) }}">
                                <button class="btn btn-outline-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- container-scroller -->


@endsection

