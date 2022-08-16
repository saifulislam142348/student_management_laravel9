<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\course;
use App\Models\Department_course;
use App\Models\registration;
use App\Models\courseconfirm;
use Illuminate\Support\Facades\DB;



class StudentController extends Controller
{
      //student route 
    public function student(){
        $department= Department::all();
        return view('student.student', compact('department'));
    }
    public function registration(){
        $department= Department::all();
        return view('student.registration', compact('department'));
    }
    //registration store 
    public function registrationstore(Request $request){
        $rules=[
            'name'=>'required',
            'department_id'=>'required',
    
        
        ];
           $this->validate($request,$rules);
       $registration= new Registration();
       $registration->department_id=$request->input('department_id');
       $registration->name=$request->input('name');
       
       
        $registration->save();
        return redirect()->back()->with('status','Registration  successfully');
        
    }
    public function courseAdd(){
        
        $students= Registration::all();
        return view('student.courseadd', compact('students'));
    }
    public function profile(){
      //  $students = DB::table('registrations')->where('id','1')->get();

$students= Registration::find(1);
 
   
      
        return view('student.profile',compact('students'));
    }

    public function courseSelect($id){
  
     $students= Registration::find($id);
    
     $department_course= Department_course::get()->groupBy($id);
 
        return view('student.courseselect',compact('department_course','students'));
    }

    public function courseconfirm(Request $request){
        $rules=['course_id'=>'required'];
        $this->validate($request,$rules);
    foreach($request->input('course_id') as $course){
        $courseconfirm= new courseconfirm();
        $courseconfirm->student_id=$request->input('student_id');
        $courseconfirm->department_id=$request->input('department_id');
       
        $courseconfirm->course_id=$course;
        $courseconfirm->save();
    }

        
         
         return redirect()->back()->with('status','course select confirm  successfully');
      
    }

    public function coursedestroy($id){

        $courseconfirm= courseconfirm::where('course_id', $id)->first();
        $courseconfirm->delete();
        return redirect()->back()->with('status','student course record  Deleted Successfully');
    }
    public function studentdestroy($id){

        $courseconfirm= courseconfirm::where('student_id', $id)->first();
        $courseconfirm->delete();
        return redirect()->back()->with('status','student record  Deleted Successfully');
    }
  
}

