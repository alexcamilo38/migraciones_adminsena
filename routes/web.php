<?php

use App\Http\Controllers\AreaController;
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

Route::get('trainingcenter/registro',[TrainingCenterController::class,'operador'])->name('trainingcenter.registro');
Route::post('trainingcenter/salidas',[TrainingCenterController::class,'recurso'])->name('trainingcenter.salidas');