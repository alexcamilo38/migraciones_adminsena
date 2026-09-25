<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Training_center;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    //
    public function registro()
    {
        $training_centers = Training_center::all();
        
        return view('announcements.create', compact('training_centers'));
    }

    public function index()
    {
        $announcements = Announcement::all();

        return response()->json($announcements);
    }

    public function dato(Request $request)
    {
        $announcements = Announcement::create($request->all());
            //ADJUNTAR EL PDF
            $file = $request->file('urlFoto');

            $nombreArchivo = "foto_" . time()."." . $file->guessExtension();
            $request->file('urlFoto')->storeAs('public/images', $nombreArchivo);

            $announcements->urlFoto = $nombreArchivo;
            $announcements->save();
        

        return response()->json($announcements);
    
    }

    public function show($id)
    {
       $announcements = Announcement::find($id);

        return response()->json($announcements);
    }

    public function edit(Announcement $announcements)
    {
        $training_centers = Training_center::all();

        return response()->json(compact('announcements', 'training_centers'));
    }
    

    public function update(Request $request, Announcement $announcements)
    {
        $announcements->update($request->all());

        return response()->json($announcements);
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return response()->json($announcement);
    }
}
