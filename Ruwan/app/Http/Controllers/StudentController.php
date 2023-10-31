<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends ParentController
{
    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function index()
    {
        $response['students'] = $this->student->all();
        // dd($response);
        return view('admin.dashboard.pages.student.student')->with($response);
    }

    public function addStudent()
    {
        return view('admin.dashboard.pages.student.addstudent');
    }

    public function addStudentGuardian()
    {
        return view('admin.dashboard.pages.student.addstudent2');
    }

    public function createStudent(Request $request)
    {
        
        $imageName = time().'.'.$request->profile_img_path->extension();  
        $request->profile_img_path->move(public_path('images'), $imageName);

        $this->student->create(array_merge($request->all(), ['profile_img_path' => $imageName]));
       
        return redirect()->back();

    }

    public function editStudent()
    {
        return view('admin.dashboard.pages.student.editstudent');
    }
}
