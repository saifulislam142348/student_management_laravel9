@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <a href="/" class=" list-group-item text-success ">Home</a>
                    <li><a href="{{ route('admin') }}" class="list-group-item text-success">
                            <i class="glyphicon glyphicon-envelope text-success "></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('department') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department add</a>
                    </li>
                    <li>
                        <a href="{{ route('course') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Course Add</a>
                        <a href="{{ route('departmentView') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department course add </a>
                    </li>
                    <li>
                        <a href="{{ route('departmentCourse') }}" class="list-group-item text-danger active"><i
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
                    <table class="table">
                        <tr>
                            <th>Department id</th>
                            <th>Department name</th>
                            <th>Department course</th>
                      
                        </tr>


                        @foreach ($department_course as $item)
                            <tr>
                                <td>{{ $item[0]->department_id }}</td>


                                <td>{{ $item[0]->department->name }}</td>
                                <td colspan="5">
                                    @foreach ($item as $it)
                                        <li> {{ $it->course->name }}</li>
                                    @endforeach
                                </td>
                              
                               
                                <td>
                                    <form method="post" action="{{url('admin/departmentcourse/delete', $item[0]->department_id)}}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                               
                                </td>
                        @endforeach
                        
                        </tr>

                    </table>


                </div>
            </div>





        </div>

    </div>
@endsection
