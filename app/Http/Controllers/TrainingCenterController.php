<?php

namespace App\Http\Controllers;

use App\Models\Training_center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    //

    public function registro(){
        return view('trainingcenters.registrar');
    }
    public function dato(Request $request){
        $trainig = new Training_center();
        $trainig->name = $request->name;
        $trainig->location = $request->location;
        $trainig->save();
        return $trainig;
    }





    
}
