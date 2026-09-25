<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    //


     public function index(){

        $areas=Area::all();

        return response()->json($areas);


    }

    public function create(){
        return view('areas.create');
    }
    
    public function salida(Request $request){
       //si se le pone el  return Area::create($request->all()); muestra los datos escritos
        $areas = Area::create($request->all());
        return response()->json($areas);
        
    }



    public function show ($id){

     $areas=Area::find($id);
    return response()->json($areas);
    

    }

    
    public function edit(Area $areas)
    { //Encuentro el Curso

        return response()->json($areas);
    }

     public function update(Request $request, Area $areas){

        $areas->name = $request->name;
      
        $areas->save();

        return response()->json($areas);

      }
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Area $areas)
    {
        $areas->delete();
        return response()->json($areas);
    }
}
