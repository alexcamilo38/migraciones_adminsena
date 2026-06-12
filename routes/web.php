<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
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
    return view('welcome');
});

Route::get('areas/create',[AreaController::class,'create'])->name('areas.create');
Route::post('areas/store',[AreaController::class,'salida'])->name('areas.store');

Route::get('trainingcenter/registrar',[TrainingCenterController::class,'registro'])->name('trainingcenters.registrar');
Route::post('trainingcenter/dato',[TrainingCenterController::class,'dato'])->name('trainingcenters.datos');

Route::get('computer/computador',[ComputerController::class,'marca'])->name('computer.computador');
Route::post('computer/model',[ComputerController::class,'model'])->name('computer.model');