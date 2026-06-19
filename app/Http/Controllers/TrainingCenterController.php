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
        Training_center::create($request->all());
    }





    
}
