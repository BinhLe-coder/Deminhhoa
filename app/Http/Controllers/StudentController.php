<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function get_all_student() {
        $students = Student::get();
        return view('student_manage',['students' => $students]);
    }
    public function get_student_by_id($id) {
        $student = Student::find($id);
        return view('student_edit', ['student'=> $student]);
    }
    public function edit($id, Request $request) {   
        $student = Student::find($id);
        $student->fullname = $request->name;
        $student->birthday = $request->birthday;
        $student->address = $request->address;
        $student->update();
        return redirect('/');
    } 
    public function delete($id) {   
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    } 
    public function add() {  
        return view('student_add');
    } 
    public function store(Request $request) {  
        $student = new Student();
        $student->fullname = $request->name;
        $student->birthday = $request->birthday;
        $student->address = $request->address;
        // dd($student);
        $student->save();
        return redirect('student_manage');
    } 

}
