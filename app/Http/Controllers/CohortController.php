<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use App\Models\Offer;
use Illuminate\Http\Request;

class CohortController extends Controller
{
    //
    public function index(){

        $cohorts=Cohort::all();

        return view('cohorts.index',compact('cohorts'));


    }

    public function registro(){
    //llamamos a todos sin necesidad de escribir uno por uno
     $offer=Offer::all();
        return view('cohorts.create',compact('offer'));
    }
    
    public function dato(Request $request){
         Cohort::create($request->all());
         return redirect()->route('cohorts.index');
    }
    
    public function show ($id){

     $cohorts=Cohort::find($id);
       return view('cohorts.show',compact('cohorts'));


    }
    public function edit(Cohort $cohorts)
    {
        // Traemos todos los registros de las tablas foráneas
        $offer = Offer::all();

        //  Enviamos todo a la vista con compact
        return view('cohorts.edit', compact('cohorts', 'offer'));
    }

    public function update(Request $request, Cohort $cohorts)
    {
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $cohorts->update($request->all());

        return redirect()->route('cohorts.index');
    }
    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Cohort $cohorts)
    {
        $cohorts->delete();
        return redirect()->route('cohorts.index');
    }
    

}
