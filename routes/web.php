<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;

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
Route::get('',function(){
    return view('home');
});

Route::get('areas/create',[AreaController::class,'create'])->name('areas.create');
Route::get('areas/list',[AreaController::class,'index'])->name('areas.index');
Route::post('areas/store',[AreaController::class,'salida'])->name('areas.store');
Route::get('areas/{id}',[AreaController::class,'show'])->name('areas.show');
Route::put('areas/{areas}',[AreaController::class,'update'])->name('areas.update');
Route::get('areas/{areas}/editar',[AreaController::class,'edit'])->name('areas.edit');
Route::delete('areas/{areas}',[AreaController::class,'destroy'])->name('areas.destroy');

Route::get('trainingcenter/registrar',[TrainingCenterController::class,'registro'])->name('trainingcenters.registrar');
Route::get('trainingcenter/list',[TrainingCenterController::class,'index'])->name('trainingcenters.index');
Route::post('trainingcenter/dato',[TrainingCenterController::class,'dato'])->name('trainingcenters.datos');
Route::get('trainingcenter/{id}',[TrainingCenterController::class,'show'])->name('trainingcenters.show');
Route::put('trainingcenter/{Training_centers}',[TrainingCenterController::class,'update'])->name('trainingcenters.update');
Route::get('trainingcenter/{Training_centers}/editar',[TrainingCenterController::class,'edit'])->name('trainingcenters.edit');
Route::delete('trainingcenter/{Training_centers}',[TrainingCenterController::class,'destroy'])->name('trainingcenters.destroy');

Route::get('computer/computador',[ComputerController::class,'marca'])->name('computer.computador');
Route::get('computer/list',[ComputerController::class,'index'])->name('computer.index');
Route::post('computer/model',[ComputerController::class,'model'])->name('computer.model');
Route::get('computer/{id}',[ComputerController::class,'show'])->name('computer.show');
Route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');
Route::get('computer/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit');
Route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy');

Route::get('teacher/registro',[TeacherController::class,'registro'])->name('teacher.registro');
Route::get('teacher/list',[TeacherController::class,'index'])->name('teacher.index');
Route::post('teacher/admin',[TeacherController::class,'dato'])->name('teacher.admin');
Route::get('teacher/{id}',[TeacherController::class,'show'])->name('teacher.show');
Route::put('teacher/{teachers}',[TeacherController::class,'update'])->name('teacher.update');
Route::get('teacher/{teachers}/editar',[TeacherController::class,'edit'])->name('teacher.edit');
Route::delete('teacher/{teachers}',[TeacherController::class,'destroy'])->name('teacher.destroy');

Route::get('course/registro',[CourseController::class,'registro'])->name('course.registro');
Route::get('course/list',[CourseController::class,'index'])->name('course.index');
Route::post('course/admin',[CourseController::class,'dato'])->name('course.admin');
Route::get('course/{id}',[CourseController::class,'show'])->name('course.show');
Route::put('course/{courses}',[CourseController::class,'update'])->name('course.update');
Route::get('course/{courses}/editar',[CourseController::class,'edit'])->name('course.edit');
Route::delete('course/{courses}',[CourseController::class,'destroy'])->name('course.destroy');

Route::get('apprentice/registro',[ApprenticeController::class,'registro'])->name('apprentice.registro');
Route::get('apprentice/list',[ApprenticeController::class,'index'])->name('apprentice.index');
Route::post('apprentice/admin',[ApprenticeController::class,'dato'])->name('apprentice.admin');
Route::get('apprentice/{id}',[ApprenticeController::class,'show'])->name('apprentice.show');
Route::put('apprentice/{apprentices}',[ApprenticeController::class,'update'])->name('apprentice.update');
Route::get('apprentice/{apprentices}/editar',[ApprenticeController::class,'edit'])->name('apprentice.edit');
Route::delete('apprentice/{apprentices}',[ApprenticeController::class,'destroy'])->name('apprentice.destroy');





//@extends('layouts.app')

//@section('content')
//<h1>lista de Centros</h1>

//{{$Training_centers}}
//@endsection