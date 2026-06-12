<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    //
    public function create(){
        return view('areas.create');
    }
    public function salida(Request $request){

      $areas = new Area();

      $areas->name=$request->name;

      $areas->save();

      return $areas;

    }
}
