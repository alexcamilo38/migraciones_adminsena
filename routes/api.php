<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('areas/list', [AreaController::class, 'index'])->name('api.v1.areas.index');
Route::post('areas/store', [AreaController::class, 'salida'])->name('api.v1.areas.store');
Route::get('areas/{id}', [AreaController::class, 'show'])->name('api.v1.areas.show');
Route::put('areas/{areas}', [AreaController::class, 'update'])->name('api.v1.areas.update');
Route::delete('areas/{areas}', [AreaController::class, 'destroy'])->name('api.v1.areas.destroy');

Route::get('trainingcenter/list', [TrainingCenterController::class, 'index'])->name('api.v1.trainingcenters.index');
Route::post('trainingcenter/dato', [TrainingCenterController::class, 'dato'])->name('api.v1.trainingcenters.datos');
Route::get('trainingcenter/{id}', [TrainingCenterController::class, 'show'])->name('api.v1.trainingcenters.show');
Route::put('trainingcenter/{Training_centers}', [TrainingCenterController::class, 'update'])->name('api.v1.trainingcenters.update');
Route::delete('trainingcenter/{Training_centers}', [TrainingCenterController::class, 'destroy'])->name('trainingcenters.destroy');


Route::get('computer/list', [ComputerController::class, 'index'])->name('api.v1.computer.index');
Route::post('computer/model', [ComputerController::class, 'model'])->name('api.v1.computer.model');
Route::get('computer/{id}', [ComputerController::class, 'show'])->name('api.v1.computer.show');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('api.v1.computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('api.v1.computer.destroy');


