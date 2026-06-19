<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    //
    public function marca(){
        return view('computer.computador');
    }
    public function model(Request $request){
         Computer::create($request->all());
    }

}
