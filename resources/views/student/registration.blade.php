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

                        <a href="{{ route('profile') }}" class="list-group-item text-success ">My profile</a>
                    </li>

                    <li>
                        <a href="{{ route('registration') }}" class="list-group-item text-light active"> Registion Now</a>
                    </li>
                    <li>
                        <a href="{{ route('courseAdd') }}" class="list-group-item text-success"> Course Add</a>
                    </li>
                    <li>

                    </li>
                </ul>


            </div>
            <div class="col-md-8">


                <div class="card">
                    <div class="card-header">
                        <h4>Registration From</h4>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <h6 class="alert alert-success">{{ session('status') }}</h6>
                        @endif
                        <form action="{{ route('registrationstore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text">Name</span>
                                <input type="text" name="name" class="form-control">
                              
                            </div>
                            @foreach ($errors->all() as $error)
                            <span class="text-danger">{{ $error }}</span>
                         @endforeach

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text">Department Name</span>
                                <select class="form-control" name="department_id">
                                    <option selected>Open this select menu</option>
                                    @foreach ($department as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                 

                                </select>
                              
                            </div>


                            <input class="btn btn-success" type="submit" value="submit"><br>


                        </form>

                    </div>
                </div>
            @endsection
