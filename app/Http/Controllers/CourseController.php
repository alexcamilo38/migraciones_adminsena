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

        return view('course.index', compact('courses'));
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
        Course::create($request->all());
         return redirect()->route('course.index');
    }

    public function show($id)
    {

        $courses = Course::find($id);
        return view('course.show', compact('courses'));
    }
    public function edit(Course $courses)
    {
        // Traemos todos los registros de las tablas foráneas
        $training_centers = Training_center::all();
        $cohorts = Cohort::all();
        $environments = Environment::all();

        //  Enviamos todo a la vista con compact
        return view('course.edit', compact('courses', 'training_centers','cohorts','environments'));
    }

    public function update(Request $request, Course $courses)
    {
        //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $courses->update($request->all());

        return redirect()->route('course.index');
    }
    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Course $courses)
    {
        $courses->delete();
        return redirect()->route('course.index');
    }
}
