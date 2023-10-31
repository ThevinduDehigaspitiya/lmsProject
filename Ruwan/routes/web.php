<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Dashboard-home
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// studet-route
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/addstudent-p', [StudentController::class, 'addStudent'])->name('addstudent-profile');
Route::get('/addstudent-g', [StudentController::class, 'addStudentGuardian'])->name('addstudent-guardian');
Route::post('/student/create', [StudentController::class, 'createStudent'])->name('student.create');
Route::get('/editstudent', [StudentController::class, 'editStudent'])->name('editStudent');


// teacher-route
Route::prefix('/teacher')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('teacher');
    Route::get('/addteacher', [TeacherController::class, 'addTeacher'])->name('addteacher');
});
