<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends ParentController
{
    public function index()
    {
        return view('admin.dashboard.pages.teacher.teacher');
    }

    public function addTeacher()
    {
        return view('admin.dashboard.pages.teacher.addteacher1');
    }
    public function addStudentGuardian()
    {
        return view('admin.dashboard.pages.student.addstudent2');
    }
    public function editStudent()
    {
        return view('admin.dashboard.pages.student.editstudent');
    }
}
