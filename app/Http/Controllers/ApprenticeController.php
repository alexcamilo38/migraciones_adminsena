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

     $courses=Course::all();
     $computers=Computer::all();
        return view('apprentice.registro',compact('courses','computers'));
    }
    
    public function dato(Request $request){
        Apprentice::create($request->all());
    }
    
    public function show ($id){

     $apprentices=Apprentice::find($id);
       return view('apprentice.show',compact('apprentices'));


    }
    public function edit(Apprentice $apprentices)
    {
        // Traemos todos los registros de las tablas foráneas
        $apprentices = Course::all();
        $apprentices = Computer::all();

        //  Enviamos todo a la vista con compact
        return view('apprentice.edit', compact('apprentices', 'areas', 'training_centers'));
    }

    public function update(Request $request, Apprentice $apprentices)
    {
        $apprentices->name = $request->name;
        $apprentices->day = $request->day;
        $apprentices->course_id = $request->course_id;
        $apprentices->computer_id = $request->computer_id;
        $apprentices->save();

        return redirect()->route('teacher.index');
    }


    
}
