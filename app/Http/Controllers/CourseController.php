<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Training_center;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function index(){

        $courses=Course::all();

        return view('course.index',compact('courses'));


    }

    public function registro(){

     $areas=Area::all();
     $training_centers=Training_center::all();
        return view('course.registro',compact('areas','training_centers'));
     

    }
    
    public function dato(Request $request){
        Course::create($request->all());
    }

    public function show ($id){

     $courses=Course::find($id);
       return view('course.show',compact('courses'));


    }
}
