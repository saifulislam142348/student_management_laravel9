@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li><a href="/" class=" list-group-item  text-success ">Home</a></li>
                    <li><a href="{{ route('admin') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary active "></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('department') }}" class="list-group-item text-danger active""><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department add</a>
                    </li>
                    <li>
                        <a href="{{ route('course') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Course Add</a>
                        <a href="{{ route('departmentView') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department and Course add </a>
                    </li>
                    <li>
                        <a href="{{ route('departmentCourse') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> department and course </a>
                    </li>
                    <li>
                        <a href="{{ route('studentView') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Student all details</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-8">


                <div class="jumbotron">
                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif

                    <form action="{{ route('departmentstore') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label> Departmentt Name:</label>
                            <input type="text" name="name" class="text-primary form-control">
                            @foreach ($errors->all() as $error)
                                <span class="text-danger">{{ $error }}</span>
                            @endforeach

                        </div>
                        <input type="submit" class="btn btn-success" value="Department Add ">

                    </form>



                </div>

            </div>





        </div>

    </div>
@endsection
