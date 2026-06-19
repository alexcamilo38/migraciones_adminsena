<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Teacher;
use App\Models\Training_center;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function registro(){

     $areas=Area::all();
     $training_centers=Training_center::all();
        return view('teacher.registro',compact('areas','training_centers'));
     

    }
    
    public function dato(Request $request){
        Teacher::create($request->all());
    }
}
