<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\userAuth;

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
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'showList']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students/store', [StudentController::class, 'store']);
Route::get('/students/edit/{id}', [StudentController::class, 'edit']);
Route::post('/students/update/{id}', [StudentController::class, 'update']);
Route::get('/students/show/{id}', [StudentController::class, 'show']);


Route::delete('/students/delete/{id}', [StudentController::class, 'destroy']);

Route::get('/courses', [CourseController::class, 'showList']);
Route::get('/courses/create', [CourseController::class, 'create']);
Route::post('/courses/store', [CourseController::class, 'store']);
Route::get('/courses/edit/{id}', [CourseController::class, 'edit']);
Route::post('/courses/update/{id}', [CourseController::class, 'update']);
Route::get('/courses/show/{id}', [CourseController::class, 'show']);
Route::delete('/courses/delete/{id}', [CourseController::class, 'destroy']);

// Route::get('/teachers', [TeacherController::class, 'showList']);
// Route::get('/teachers/create', [TeacherController::class, 'create']);
// Route::post('/teachers/store', [TeacherController::class, 'store']);
// Route::get('/teachers/edit/{id}', [TeacherController::class, 'edit']);
// Route::post('/teachers/update/{id}', [TeacherController::class, 'update']);
// Route::get('/teachers/show/{id}', [TeacherController::class, 'show']);
// Route::delete('/teachers/delete/{id}', [TeacherController::class, 'destroy']);
// Route::get('/login', [TeacherController::class, 'showLoginForm']);
// Route::post('/login', [TeacherController::class, 'login']);
// Route::get('/home',[TeacherController::class, 'home']);
// Route::get('/logout', [TeacherController::class, 'logout']);

Route::middleware(['userAuth'])->group(function () {
    Route::get('/teachers', [TeacherController::class, 'showList']);
    Route::post('/teachers/store', [TeacherController::class, 'store']);
    Route::get('/teachers/edit/{id}', [TeacherController::class, 'edit']);
    Route::post('/teachers/update/{id}', [TeacherController::class, 'update']);
    Route::get('/teachers/show/{id}', [TeacherController::class, 'show']);
    Route::delete('/teachers/delete/{id}', [TeacherController::class, 'destroy']);
    Route::get('/home', [TeacherController::class, 'home']);
    Route::get('/logout', [TeacherController::class, 'logout']);
});


Route::get('/teachers/create', [TeacherController::class, 'create']);
Route::get('/login', [TeacherController::class, 'showLoginForm'])->name('login');
Route::post('/login', [TeacherController::class, 'login']);
