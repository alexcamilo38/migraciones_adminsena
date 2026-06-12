<?php

namespace App\Http\Controllers;

use App\Models\Training_center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    //

    public function operador(){
        return view('trainingcenter.registro');
    }
    public function recurso(Request $request){
        $constructor = new Training_center();
        $constructor->name = $request->name;
        $constructor->location = $request->location;
        $constructor->save();
        return $constructor;
    }





    
}
