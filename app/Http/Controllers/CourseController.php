<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
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

        $areas = Area::all();
        $training_centers = Training_center::all();
        return view('course.registro', compact('areas', 'training_centers'));
    }

    public function dato(Request $request)
    {
        Course::create($request->all());
    }

    public function show($id)
    {

        $courses = Course::find($id);
        return view('course.show', compact('courses'));
    }
    public function edit(Course $courses)
    {
        // Traemos todos los registros de las tablas foráneas
        $areas = Area::all();
        $training_centers = Training_center::all();

        //  Enviamos todo a la vista con compact
        return view('course.edit', compact('courses', 'areas', 'training_centers'));
    }

    public function update(Request $request, Course $courses)
    {
        $courses->course_number = $request->course_number;
        $courses->day = $request->day;
        $courses->area_id = $request->area_id;
        $courses->training_center_id = $request->training_center_id;
        $courses->save();

        return redirect()->route('teacher.index');
    }
}
