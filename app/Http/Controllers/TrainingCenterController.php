<?php

namespace App\Http\Controllers;

use App\Models\Training_center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    //

    public function index(){

        $Training_centers=Training_center::all();

       return response()->json($Training_centers);



    }
    public function registro(){
        return view('trainingcenters.registrar');
    }
    
    public function dato(Request $request){
        $Training_centers = Training_center::create($request->all());
        return response()->json($Training_centers);

    }
    public function show ($id){

     $Training_centers=Training_center::find($id);
     return response()->json($Training_centers);



    }
    public function edit(Training_center $Training_centers)
    { //Encuentro el Curso
       return response()->json($Training_centers);

    }
    public function update(Request $request, Training_center $Training_centers){

        $Training_centers->name = $request->name;
       $Training_centers->location = $request->location;
        $Training_centers->save();

        return response()->json($Training_centers);


      }
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Training_center $Training_centers)
    {
        $Training_centers->delete();
        return response()->json($Training_centers);

    }


    
}
