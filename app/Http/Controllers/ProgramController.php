<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    
    //
    public function registro()
    {

        $areas = Area::all();
        $programs = Program::all();

        return view('programs.create', compact('areas', 'programs'));
    }

    public function index()
    {
        $programs = Program::all();

        return response()->json($programs);
    }

    public function dato(Request $request)
    {
        $program = Program::create($request->all());
        
            $file = $request->file('urlFoto');

            $nombreArchivo = "foto_" . time()."." . $file->guessExtension();
            $request->file('urlFoto')->storeAs('public/images', $nombreArchivo);

            $program->urlFoto = $nombreArchivo;
            $program->save();
        

        return response()->json($program);
    }

    public function show($id)
    {
        $program = Program::find($id);

        return response()->json($program);
    }

    public function edit(Program $program)
    {
        $areas = Area::all();

        return response()->json(compact('program', 'areas'));
    }

    public function update(Request $request, Program $program)
    {
        $program->update($request->all());

        return response()->json($program);
    }

    public function destroy(Program $program)
    {
        $program->delete();

        return response()->json($program);
    }
}
