<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;

class AreaController extends Controller
{
    //


     public function index(){

        $areas=Area::all();

        return response()->json($areas);


    }

    
    public function salida(Request $request){
       //si se le pone el  return Area::create($request->all()); muestra los datos escritos
       // $areas = Area::create($request->all());
       // return response()->json($areas);

       $request->validate([
            'name' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $file = $request->file('imagen');

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => ['secure' => true],
        ]);

        $resultado = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'areas',
                'resource_type' => 'image',
            ]
        );

        $area = Area::create([
            'name' => $request->name,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'Area creada correctamente',
            'data' => $area,
        ], 201);
        
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
