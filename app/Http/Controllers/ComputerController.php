<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    //

    public function index(){

        $computer=Computer::all();

        return view('computer.index',compact('computer'));


    }

    public function marca(){
        return view('computer.computador');
    }
    public function model(Request $request){
         Computer::create($request->all());
    }

    public function show ($id){

     $computer=Computer::find($id);
       return view('computer.show',compact('computer'));


    }
     public function edit(Computer $computer)
    { //Encuentro el Curso

        return view('computer.edit', compact('computer'));
    }

     public function update(Request $request, Computer $computer){

        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        return redirect()->route('computer.index');

      }

}
