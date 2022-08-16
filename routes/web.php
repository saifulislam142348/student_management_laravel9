<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\HttStudentController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//student  page route  baseController

route::get('student/student',[StudentController::class, 'student'])->name('student');
route::get('student/registration',[StudentController::class, 'registration'])->name('registration');
route::post('student/registration',[StudentController::class, 'registrationstore'])->name('registrationstore');
route::get('student/profile',[StudentController::class, 'profile'])->name('profile');
route::get('student/course/add',[StudentController::class, 'courseAdd'])->name('courseAdd');
route::get('student/courseselect/{id}',[StudentController::class, 'courseSelect']);
route::post('student/courseselect',[StudentController::class, 'courseconfirm'])->name('courseconfirm');

//admin page route basecontroller

route::get('admin',[AdminController::class, 'admin'])->name('admin');
route::get('admin/department',[AdminController::class, 'department'])->name('department');
route::get('admin/course',[AdminController::class, 'course'])->name('course');
route::get('admin/department/view',[AdminController::class, 'departmentView'])->name('departmentView');
route::get('admin/student/view',[AdminController::class, 'studentView'])->name('studentView');
route::get('admin/departmentcourse',[AdminController::class, 'departmentcourse'])->name('departmentCourse');
route::get('admin/studentEdit/{id}',[AdminController::class, 'studentEdit']);
route::get('admin/studentdeptment',[AdminController::class, 'studentdeptmentView'])->name('studentdeptment');

//store department
route::post('admin/department',[AdminController::class, 'departmentstore'])->name('departmentstore');
route::post('admin/course',[AdminController::class, 'coursestore'])->name('coursestore');

//department and course relation store

route::post('admin/department/view',[AdminController::class, 'department_course'])->name('foreignkeyadd');

Route::delete('admin/departmentcourse/delete/{id}', [AdminController::class, 'destroy']);
Route::delete('admin/studentView/delete/{id}', [StudentController::class, 'coursedestroy']);
Route::delete('admin/studentview/student/delete/{id}', [StudentController::class, 'studentdestroy']);
//student info update
route::put('admin/studentupdate/{id}',[AdminController::class, 'update']);
Route::get('/search/', [AdminController::class,'search'])->name('search');