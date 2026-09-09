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

        return view('computer.index',compact('computer'));


    }

    public function marca(){
        $environments=Environment::all();
        return view('computer.computador',compact('environments'));
    }
    public function model(Request $request){
         Computer::create($request->all());
         return redirect()->route('computer.index');
         
    }

    public function show ($id){

     $computer=Computer::find($id);
       return view('computer.show',compact('computer'));


    }
     public function edit(Computer $computer)
    { //Encuentro el Curso
         $environments=Environment::all();
        return view('computer.edit', compact('computer','environments'));
    }

     public function update(Request $request, Computer $computer){
        //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $computer->update($request->all());

        return redirect()->route('computer.index');

      }
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return redirect()->route('computer.index');
    }

}
