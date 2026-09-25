<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Program;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    //

    public function index(){

        $offers=Offer::all();

        return response()->json($offers);


    }

    public function registro(){
    //llamamos a todos sin necesidad de escribir uno por uno
     $programs=Program::all();
        return view('offers.create',compact('programs'));
    }
    
    public function dato(Request $request){
         $offers = Offer::create($request->all());
         return response()->json($offers);
    }
    
    public function show ($id){

     $offers=Offer::find($id);
       return response()->json($offers);


    }
    public function edit(Offer $offers)
    {
        // Traemos todos los registros de las tablas foráneas
        $program = Program::all();

        //  Enviamos todo a la vista con compact
        return response()->json(compact('offers', 'program'));
    }

    public function update(Request $request, Offer $offers)
    {
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $offers->update($request->all());

        return response()->json($offers);
    }
    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Offer $offers)
    {
        $offers->delete();
        return response()->json($offers);
    }
    
}
