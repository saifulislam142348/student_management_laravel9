@extends('layouts.layout')

@section('content')
    <a href="/" class=" btn btn-success  text-danger ">Home</a>



    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li>
                        <a href="{{ route('student') }}" class="list-group-item text-light active "> Dashboard</a>
                    </li>

                    <li>
                        <a href="{{ route('profile') }}" class="list-group-item text-success ">My profile</a>
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








            </div>

        </div>
    @endsection
