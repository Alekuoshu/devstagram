<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImagenController extends Controller
{

    public function store(Request $request)
    {
        $imagen = $request->file('file');
        $nombreImagen = auth()->user()->id . '_' . Str::uuid() . '.' . $imagen->extension();
        // $imagen->move(public_path('uploads'), $nombreImagen);

        // $manager = new ImageManager(new Driver());
        // $imagenServidor = $manager::imagick()->read($imagen);
        $imagenServidor = ImageManager::gd()->read($imagen);
        $imagenServidor->cover(1000, 1000);
        $imagenPath = public_path('uploads') . '/' . $nombreImagen;
        $imagenServidor->save($imagenPath);
        return response()->json(['imagen' => $nombreImagen]);
    }
}
