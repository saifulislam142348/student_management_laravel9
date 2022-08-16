@extends('layouts.layout')

@section('content')
    <a href="/" class=" btn btn-success  text-danger ">Home</a>



    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li>
                        <a href="{{ route('student') }}" class="list-group-item text-success "> Dashboard</a>
                    </li>

                    <li>

                        <a href="{{ route('profile') }}" class="list-group-item text-light active ">My profile</a>
                    </li>

                    <li>
                        <a href="{{ route('registration') }}" class="list-group-item text-success"> Registion Now</a>
                    </li>
                    <li>
                        <a href="{{ route('courseAdd') }}" class="list-group-item text-success"> Course Add</a>
                    </li>
                    <li>

                    </li>
                </ul>


            </div>
            <div class="col-md-8">
                <div class="jumbotron">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th><br>
                              <td>{{$students->id}}</td>

                            </tr>
                            <tr>
                                <th>Name:</th>
                            <td>
                                {{$students->name}}
                            </td>
                            
                                

                            </tr>
                            <tr>
                                <th>Department</th><br>
                               <td>
                                {{$students->department->name}}
                               </td>
                            

                            </tr>
                        

                        </thead>
                    </table>
                </div>







            </div>

        </div>
    @endsection
