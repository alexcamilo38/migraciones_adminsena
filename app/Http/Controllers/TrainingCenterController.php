<?php

namespace App\Http\Controllers;

use App\Models\Training_center;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;

class TrainingCenterController extends Controller
{
    //

    public function index(){

        $Training_centers=Training_center::all();

       return response()->json($Training_centers);



    }
    
    public function dato(Request $request){

       // $Training_centers = Training_center::create($request->all());
        //return response()->json($Training_centers);
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        // Obtener imagen
        $file = $request->file('imagen');

        // Configurar Cloudinary
        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => [
                'secure' => true,
            ],
        ]);

        // Subir imagen a Cloudinary
        $resultado = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'training_centers',
                'resource_type' => 'image',
            ]
        );

        // Crear centro 
        $Training_centers = Training_center::create([
            'name' => $request->name,
            'location' => $request->location,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'Centro de formacion creado correctamente',
            'data' => $Training_centers,
        ], 201);

    }
    public function show ($id){

     $Training_centers=Training_center::find($id);
     return response()->json($Training_centers);



    }
    public function edit(Training_center $Training_centers)
    { //Encuentro el Curso
       return response()->json($Training_centers);

    }
    public function update(Request $request, Training_center $Training_centers){

        $Training_centers->name = $request->name;
       $Training_centers->location = $request->location;
        $Training_centers->save();

        return response()->json($Training_centers);


      }
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Training_center $Training_centers)
    {
        $Training_centers->delete();
        return response()->json($Training_centers);

    }


    
}
