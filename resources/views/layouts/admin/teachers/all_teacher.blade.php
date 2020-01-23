@extends('layouts.admin.admin_design')
@section('dashboard')

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">All Teacher's</h2>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                        <tr>
                            <th>st_name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Department</th>
                            <th>Image</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->teacher_name }}</td>
                                <td>{{ $teacher->teacher_phone }}</td>
                                <td>{{ $teacher->teacher_address }}</td>
                                <td>
                                    @if($teacher->teacher_department==0)
                                        <span class="label label-success">{{'BSS'}}</span>
                                    @elseif($teacher->teacher_department==1)
                                        <span class="label label-success">{{'CSE'}}</span>
                                    @elseif($teacher->teacher_department==2)
                                        <span class="label label-success">{{'EEE'}}</span>
                                    @elseif($teacher->teacher_department==3)
                                        <span class="label label-success">{{'ACC'}}</span>
                                    @else
                                        <span class="label label-important">{{ 'Not defined' }}</span>
                                    @endif
                                </td>
                                <td><img src="{{url($teacher->teacher_image)}}" style="width: 80px;height: 90px" alt=""></td>
                                <td>
                                    <a href="{{ url('/teacherDelete/'.$teacher->id) }}">
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


@endsection