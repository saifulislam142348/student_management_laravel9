@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ul>
                    <li><a href="/" class=" list-group-item  text-success ">Home</a></li>
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
                        <a href="{{ route('departmentView') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department and Course add </a>
                    </li>
                    <li>
                        <a href="{{ route('departmentCourse') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> department and course </a>
                    </li>
                    <li>
                        <a href="{{ route('studentView') }}" class="list-group-item text-danger active"><i
                                class="text-danger">studentView</i> </a>
                    </li>
                </ul>

            </div>
            <div class="col-md-10">


                <div class="container">
                    <div class="jumbotron">
                        <table class="table">
                            <tr class="table-light">
                                <th>StudentID</th>
                                <th>Student Name</th>
                                <th>Student Department</th>
                                <th>Action </th>
                            </tr>



                            @foreach ($students as $item)
                                <tr class="table-primary">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->department->name }}</td>
                                    <td>
                                        <a href="{{url('admin/studentEdit/'.$item->id)}}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach


                        </table>


                    </div>

                </div>
            </div>





        </div>

    </div>
@endsection
