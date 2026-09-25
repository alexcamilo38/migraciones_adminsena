<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Cohort;
use App\Models\Course;
use App\Models\Environment;
use App\Models\Training_center;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function index()
    {

        $courses = Course::all();

        return response()->json($courses);
    }

    public function registro()
    {
        
        $training_centers = Training_center::all();
        $cohorts = Cohort::all();
        $environments = Environment::all();
        return view('course.registro', compact('training_centers','cohorts','environments'));
    }

    public function dato(Request $request)
    {
        $courses =Course::create($request->all());
        return response()->json($courses);
    }

    public function show($id)
    {

        $courses = Course::find($id);
        return response()->json($courses);
    }
    public function edit(Course $courses)
    {
        // Traemos todos los registros de las tablas foráneas
        $training_centers = Training_center::all();
        $cohorts = Cohort::all();
        $environments = Environment::all();

        //  Enviamos todo a la vista con compact
        return response()->json(compact('courses', 'training_centers','cohorts','environments'));
    }

    public function update(Request $request, Course $courses)
    {
        //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $courses->update($request->all());

        return response()->json($courses);
    }
    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Course $courses)
    {
        $courses->delete();
        return response()->json($courses);
    }
}
