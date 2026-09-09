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

        return view('announcements.index', compact('announcements'));
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
        

        return redirect()->route('announcements.index');
    
    }

    public function show($id)
    {
       $announcements = Announcement::find($id);

        return view('announcements.show', compact('announcements'));
    }

    public function edit(Announcement $announcements)
    {
        $training_centers = Training_center::all();

        return view('announcements.edit', compact('announcements', 'training_centers'));
    }
    

    public function update(Request $request, Announcement $announcements)
    {
        $announcements->update($request->all());

        return redirect()->route('announcements.index');
    }

    public function destroy(Announcement $environment)
    {
        $environment->delete();

        return redirect()->route('announcements.index');
    }
}
