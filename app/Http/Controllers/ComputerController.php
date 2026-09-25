<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\Environment;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    //
 
    public function index(){

        $computer=Computer::all();

       return response()->json($computer);


    }

    public function marca(){
        $environments=Environment::all();
        return view('computer.computador',compact('environments'));
    }
    public function model(Request $request){
         $computer = Computer::create($request->all());
         return response()->json($computer);
         
    }

    public function show ($id){

     $computer=Computer::find($id);
       return response()->json($computer);


    }
     public function edit(Computer $computer)
    { //Encuentro el Curso
         $environments=Environment::all();
        return response()->json($computer);
    }

     public function update(Request $request, Computer $computer){
        //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $computer->update($request->all());

        return response()->json($computer);

      }
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return response()->json($computer);
    }

}
