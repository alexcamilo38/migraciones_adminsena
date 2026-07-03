<?php

namespace App\Http\Controllers;

use App\Models\Training_center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    //

    public function index(){

        $Training_centers=Training_center::all();

        return view('trainingcenters.index',compact('Training_centers'));


    }
    public function registro(){
        return view('trainingcenters.registrar');
    }
    
    public function dato(Request $request){
        Training_center::create($request->all());
    }





    
}
