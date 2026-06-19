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

        Area::create($request->all());

    }
}
