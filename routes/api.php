<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CohortController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TeacherController;
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

Route::get('teacher/list', [TeacherController::class, 'index'])->name('teacher.index');
Route::post('teacher/admin', [TeacherController::class, 'dato'])->name('teacher.admin');
Route::get('teacher/{id}', [TeacherController::class, 'show'])->name('teacher.show');
Route::put('teacher/{teachers}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('teacher/{teachers}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

Route::get('course/list', [CourseController::class, 'index'])->name('api.v1.course.index');
Route::post('course/admin', [CourseController::class, 'dato'])->name('api.v1.course.admin');
Route::get('course/{id}', [CourseController::class, 'show'])->name('api.v1.course.show');
Route::put('course/{courses}', [CourseController::class, 'update'])->name('api.v1.course.update');
Route::delete('course/{courses}', [CourseController::class, 'destroy'])->name('api.v1.course.destroy');

Route::get('apprentice/list', [ApprenticeController::class, 'index'])->name('api.v1.apprentice.index');
Route::post('apprentice/admin', [ApprenticeController::class, 'dato'])->name('api.v1.apprentice.admin');
Route::get('apprentice/{id}', [ApprenticeController::class, 'show'])->name('api.v1.apprentice.show');
Route::put('apprentice/{apprentices}', [ApprenticeController::class, 'update'])->name('api.v1.apprentice.update');
Route::delete('apprentice/{apprentices}', [ApprenticeController::class, 'destroy'])->name('api.v1.apprentice.destroy');

Route::get('program/list', [ProgramController::class, 'index'])->name('api.v1.programs.index');
Route::post('program/admin', [ProgramController::class, 'dato'])->name('api.v1.programs.store');
Route::get('program/{id}', [ProgramController::class, 'show'])->name('api.v1.programs.show');
Route::put('program/{program}', [ProgramController::class, 'update'])->name('api.v1.programs.update');
Route::delete('program/{program}', [ProgramController::class, 'destroy'])->name('api.v1.programs.destroy');

Route::get('environment/list', [EnvironmentController::class, 'index'])->name('api.v1.environments.index');
Route::post('environment/admin', [EnvironmentController::class, 'dato'])->name('api.v1.environments.store');
Route::get('environment/{id}', [EnvironmentController::class, 'show'])->name('api.v1.environments.show');
Route::put('environment/{environments}', [EnvironmentController::class, 'update'])->name('api.v1.environments.update');
Route::delete('environment/{environment}', [EnvironmentController::class, 'destroy'])->name('api.v1.environments.destroy');

Route::get('announcements/list', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::post('announcements/admin', [AnnouncementController::class, 'dato'])->name('announcements.store');
Route::get('announcements/{id}', [AnnouncementController::class, 'show'])->name('announcements.show');
Route::put('announcements/{announcements}', [AnnouncementController::class, 'update'])->name('announcements.update');
Route::delete('announcements/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');

Route::get('offer/list', [OfferController::class, 'index'])->name('api.v1.offers.index');
Route::post('offer/admin', [OfferController::class, 'dato'])->name('api.v1.offers.admin');
Route::get('offer/{id}', [OfferController::class, 'show'])->name('api.v1.offers.show');
Route::put('offer/{offers}', [OfferController::class, 'update'])->name('api.v1.offers.update');
Route::delete('offer/{offers}', [OfferController::class, 'destroy'])->name('api.v1.offers.destroy');

Route::get('cohorts/list', [CohortController::class, 'index'])->name('api.v1.cohorts.index');
Route::post('cohorts/admin', [CohortController::class, 'dato'])->name('api.v1.cohorts.admin');
Route::get('cohorts/{id}', [CohortController::class, 'show'])->name('api.v1.cohorts.show');
Route::put('cohorts/{cohorts}', [CohortController::class, 'update'])->name('api.v1.cohorts.update');
Route::delete('cohorts/{cohorts}', [CohortController::class, 'destroy'])->name('api.v1.cohorts.destroy');