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
                            <thead class="table-secondary">



                                <tr >
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Department Name</th>
                                    <th>student info delete</th>
                                    <th>student info edit</th>
                                    <th> student Course List</th>


                                </tr>


                                @foreach ($studentinfo as $item)
                                    <tr  >
                                        <td >{{ $item[0]->student_id }}</td>
                                        <td>{{ $item[0]->student->name }}</td>
                                        <td>{{ $item[0]->department->name }}</td>
<td> <form method="post" action="{{ url('admin/studentview/student/delete', $item[0]->student_id) }}">
 
    @csrf
    
        @method('delete')

       
  
    <button type="submit"class="btn btn-outline-danger btn-sm">student Info delete</button>
  
    
</form>

</td>
                                        </td </tr>

                                        <td colspan="5">

                                            @foreach ($item as $it)
                                                <ul>
                                                    <ol>
                                                        {{ $it->course->name }}
                                                    </ol>
                                                    <ol>
                                                        <form method="post"
                                                            action="{{ url('admin/studentView/delete', $item[0]->course_id) }}">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </ol>
                                                </ul>
                                            @endforeach



                                        <td>

                                            <div class="btn-group">


                                        <td>


                                        </td>

                                        <td>


                                        </td>
                    </div>
                    @endforeach







                    </thead>


                    </table>
                </div>

            </div>
        </div>





    </div>

    </div>
@endsection
