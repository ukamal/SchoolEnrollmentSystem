@extends('layouts.admin.admin_design')
@section('dashboard')

    <div class="row justify-content-center">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="col-md-12">
            <div class="card-header">
                <h3>All Student result information here</h3>
                <div class="card-tools" style="position: absolute;right: 1rem;top: .5rem;">
                    <a class="btn btn-success" href="{{ url('/subjects') }}">Subject<i class="fas fa-plus"></i></a>
                    <a class="btn btn-success" href="{{ url('/students/create') }}">Add New <i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="text-center">
                            <tr>
                                <th width="10%">SL</th>
                                <th width="10%">Name</th>
                                <th width="10%">Class</th>
                                <th width="10%">Roll</th>
                                <th width="20%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($children as $child)
                                <tr>
                                    <td>{{ $child->id }}</td>
                                    <td>{{$child->name}}</td>
                                    <td>{{$child->class}}</td>
                                    <td>{{$child->roll}}</td>
                                    <td>
                                        <a style="float: left; margin-left: 2px;" href="{{ url('/students/edit/'.$child->id) }}" class="btn btn-primary">Edit</a>
                                        <form style="float: left; margin-left: 2px;" action="{{ url('/students/delete/'.$child->id)}}" method="post">
                                            @csrf
                                            <button onclick="return confirm('Are you sure')" type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a style="float: left; margin-left: 2px;" href="{{ route('student.result.create', $child->id) }}" class="btn btn-success">Add Result</a>
                                        <a style="float: left; margin-left: 2px;" href="{{ route('student.result.view', $child->id) }}" class="btn btn-warning">View Result</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! $children->links() !!}
    </div>

@endsection
