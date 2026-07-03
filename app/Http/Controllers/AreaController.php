<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    //


     public function index(){

        $areas=Area::all();

        return view('areas.index',compact('areas'));


    }

    public function create(){
        return view('areas.create');
    }
    public function salida(Request $request){

        Area::create($request->all());

    }



    public function show ($id){

     $areas=Area::find($id);
       return view('areas.show',compact('areas'));


    }
}
