@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li><a href="/" class=" list-group-item  ">Home</a></li>
                    <li><a href="{{ route('admin') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary active "></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('department') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department add</a>
                    </li>
                    <li>
                        <a href="{{ route('course') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Course Add</a>
                        <a href="{{ route('departmentView') }}" class="list-group-item text-danger active"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department and Course add</a>
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
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="jumbotron">
                    <h2> Department and Course Relation Create</h2>
                    <form action="{{ route('foreignkeyadd') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        
                            <label> Departmentt Name:</label>
                            <select  class="form-select form-select-sm" name="department_id" id="">
                                <option selected>option choose</option>
                                @foreach ($department as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                       

                            @foreach ($errors->all() as $error)
                            <span class="text-danger">{{ $error }}</span>
                         @endforeach
                            <label> Course Name:</label>
                            <select class="form-select form-select-sm" name="course_id" id="">
                                <option selected>option choose</option>
                                @foreach ($course as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                       

                        <input type="submit" class="btn btn-success" value="Add ">
                    </form>
                </div>
                
            @endsection
