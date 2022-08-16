@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li><a href="/" class=" list-group-item  text-success ">Home</a></li>
                    <li>
                        <a href="{{ route('admin') }}" class="list-group-item text-danger active"><i
                                class="glyphicon glyphicon-envelope text-primary active "></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('department') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department add</a>
                    </li>
                    <li>
                        <a href="{{ route('course') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Course Add</a>
                        <a href="{{ route('departmentView') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department and Course add</a>
                    </li>
                    <li>
                        <a href="{{ route('departmentCourse') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> department and course </a>
                    </li>
                    <li>
                        <a href="{{ route('studentView') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> studentView </a>
                    </li>
                    <li>
                        <a href="{{ route('studentdeptment') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> studentdepartment </a>
                    </li>
                </ul>

            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-4">
                        <div class="jumbotron bg-Secondary">


                            <form action="{{ route('search') }}" method="GET">
                                <input type="text" name="search" required />
                                <button type="submit">Search</button>
                            </form>
                        </div>
                        

                    </div>
                    <div class="col-4">
                        <div class="jumbotron bg-Secondary">
                            <h3><span>
                                    <b>
                                        Totol Student

                                    </b>
                                </span></h3>
                            <div class="col-sm-6">

                                <button class="btn-success">
                                    <h3><b>{{ $student }}</b></h3>
                                </button>


                            </div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="jumbotron bg-Secondary">
                            <h3><span><b>Totol Department</b>
                                </span></h3>
                            <div class="col-sm-6">

                                <button class="btn-success">
                                    <h3><b>{{ $department }}</b></h3>
                                </button>


                            </div>
                        </div>
                    </div>
                </div>



            </div>





        </div>

    </div>
@endsection
