<?php

namespace App\Http\Controllers;

use App\Models\Environment;
use App\Models\Training_center;
use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    //
    public function registro()
    {
        $training_centers = Training_center::all();
        
        return view('environments.create', compact('training_centers'));
    }

    public function index()
    {
        $environments = Environment::all();

       return response()->json($environments);
    }

    public function dato(Request $request)
    {
        $environments = Environment::create($request->all());
            //ADJUNTAR EL PDF
            $file = $request->file('urlFoto');

            $nombreArchivo = "foto_" . time()."." . $file->guessExtension();
            $request->file('urlFoto')->storeAs('public/images', $nombreArchivo);

            $environments->urlFoto = $nombreArchivo;
            $environments->save();
        

        return response()->json($environments);
    
    }

    public function show($id)
    {
       $environments = Environment::find($id);

        return response()->json($environments);
    }

    public function edit(Environment $environments)
    {
        $training_centers = Training_center::all();

        return response()->json(compact('environments', 'training_centers'));
    }
    

    public function update(Request $request, Environment $environments)
    {
        $environments->update($request->all());

        return response()->json($environments);
    }

    public function destroy(Environment $environment)
    {
        $environment->delete();

        return response()->json($environment);
    }
    
}
