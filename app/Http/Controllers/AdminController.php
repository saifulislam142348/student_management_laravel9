<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\course;
use App\Models\Registration;
use App\Models\Department_course;
use App\Models\courseconfirm;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\Pivot;


class AdminController extends Controller
{


    
    //admin route


 public function admin (){
    $student=Registration::count();
    $department=Department::count();
    //dd($student);
    return view('admin/admin',compact('student','department'));
}
public function course (){
    return view('admin.course');
}
public function department(){
    return view('admin/department');
}
public function studentdeptmentView(){
    $students=Registration::all();

    return view('admin/studentdeptment',compact('students'));
}
public function departmentView(){
$department= Department::all();
$course= Course::all();

    return view('admin/departmentView', compact('department','course'));
}
public function departmentcourse(){
    $department_course= Department_course::get()->groupBy('department_id');
    // dd($department_course);

    return view('admin/departmentcourse',compact('department_course'));
}

//student and department under course view
public function studentView(){
$registration=Registration::get();
$studentinfo= courseconfirm::get()->groupBy('student_id');



return view('admin/studentView' , compact('registration','studentinfo'));
}
//department store
    public function departmentstore(Request $request){

        $department= new Department();
        $department->name=$request->input('name');
        $rules=[
          'name'=>'required|unique:departments',
          
          
          
        ];
        $this->validate($request,$rules);
        $department->save();
        return redirect()->back()->with('status','Department Add successfully');
        
            
        }
    public function coursestore(Request $request){
        $rules=[
            'name'=>'required|unique:courses',
           
            
          ];
          $this->validate($request,$rules);

        $course= new Course();
        $course->name=$request->input('name');
        $course->save();
        return redirect()->back()->with('status','course Add successfully');
        
            
        }
        //department and course added
    public function department_course(Request $request){
        $rules=[
           'department_id'=>'required',
           'course_id'=>'required',
           
            
          ];
          $this->validate($request,$rules);

          $department_course= Department_course::where('department_id',$request->input('department_id'))->where('course_id',$request->input('course_id'))->first();
          if(!$department_course){

              $department_course= new Department_course();
              $department_course->department_id=$request->input('department_id');
              $department_course->course_id=$request->input('course_id');       
              $department_course->save();
              return redirect()->back()->with('status','department under  course   Addded successfully');
          }


        return redirect()->back()->with('status','allready added');
        
            
        }
        public function destroy($id){

            $department_course= Department_course::where('department_id', $id)->first();
            $department_course->delete();
            return redirect()->back()->with('status','department and course Deleted Successfully');
        }
        
public function studentEdit($id){
  /* $student = DB::table('courseconfirms')
                ->orderBy('student_id')
                ->where('student_id', '=', $id )
                ->get();
               */
         $student=Registration::find($id);
               $department=Department::all();
              


    return view('admin/studentEdit',compact('student','department'));
}
public function update(Request $request, $id)
{
    $student = registration::find($id);
   
  
       $student->department_id=$request->input('department_id');
       $student->name=$request->input('name');
      
    return redirect()->back()->with('status','name and department Updated Successfully');
}
//search
public function search(Request $request){
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $department= Department::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('id', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the resluts compacted
    return view('search', compact('department'));
}
}
