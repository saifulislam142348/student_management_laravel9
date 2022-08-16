@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="jumbotron">
                    <ul>




                        <a href="{{ route('profile') }}" class="list-group-item text-dark ">My profile</a>

                        <br>


                        <a href="{{ route('courseAdd') }}" class="list-group-item text-danger active"> Course Add</a>




                    </ul>

                </div>

            </div>
            <div class="col-md-8">
                <div class="jumbotron">
                    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                    <form action="{{ route('courseconfirm') }}" method="POST" enctype="multipart/form-data">
                        @csrf


               
                        <div class="input-group input-group-sm mb-3">
                          
                            <input type="hidden" name="student_id" value=" {{$students->id}}">
                    
                            </div> 
                         
   
                        <div class="input-group input-group-sm mb-3">
                          
                            <input type="hidden" name="department_id" value=" {{$students->department->id}}">
                    
                            </div> 
                         
                      
                     
                        <br>
                        <span class="input-group-text text-danger">Department Course</span>
                        <div class="input-group input-group-sm mb-3">
                      

                        </div>
                        <div class="form-check">
                            @foreach ($department_course as $item)
                            @foreach ($item as $it)
                            <input class="form-check-input" type="checkbox" name="course_id[]" value="  {{ $it->course->id }}" ">
                            <label class="form-check-label" >
                              

       
                         <ul>
                       
                            {{ $it->course->name }}
                        </ul>
                                   

                                        @endforeach
                                   
                            @endforeach
                            </label>
                        </div>
                        

                        <div class="form-check"><br>
                          
                            <input class="btn btn-success" type="submit" value="save"><br>
                        </div>

                    </form>
                </div>







            </div>
        </div>
    </div>
@endsection
