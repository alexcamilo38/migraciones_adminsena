<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Area;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Training_center;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    //
    public function index(){

        $apprentices=Apprentice::all();

        return view('apprentice.index',compact('apprentices'));


    }

    public function registro(){
    //llamamos a todos sin necesidad de escribir uno por uno
     $courses=Course::all();
     $computers=Computer::all();
        return view('apprentice.registro',compact('courses','computers'));
    }
    
    public function dato(Request $request){
         Apprentice::create($request->all());
         return redirect()->route('apprentice.index');
    }
    
    public function show ($id){

     $apprentices=Apprentice::find($id);
       return view('apprentice.show',compact('apprentices'));


    }
    public function edit(Apprentice $apprentices)
    {
        // Traemos todos los registros de las tablas foráneas
        $courses = Course::all();
        $computers = Computer::all();

        //  Enviamos todo a la vista con compact
        return view('apprentice.edit', compact('apprentices', 'courses', 'computers'));
    }

    public function update(Request $request, Apprentice $apprentices)
    {
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $apprentices->update($request->all());

        return redirect()->route('apprentice.index');
    }
    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Apprentice $apprentices)
    {
        $apprentices->delete();
        return redirect()->route('apprentice.index');
    }


    
}
