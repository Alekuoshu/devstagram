<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(User $user)
    {
        $this->authorize('edit-profile', $user);
        return view('profile.index', [
            'user' => $user
        ]);
    }

    public function store(Request $request, User $user)
    {
        $this->authorize('edit-profile', $user);

        // Sanitization
        $request->request->add(['username' => Str::slug($request->username)]);
        $this->validate($request, [
            'username' => ['required', 'min:3', 'max:20', 'unique:users,username,' . auth()->user()->id, 'not_in:editar-perfil,edit-profile'],
        ]);

        // Imagen
        if ($request->imagen) {
            $imagen = $request->file('imagen');
            $nombreImagen = auth()->user()->id . '_' . Str::uuid() . '.' . $imagen->extension();

            $imagenServidor = ImageManager::gd()->read($imagen);
            $imagenServidor->cover(1000, 1000);
            $imagenPath = public_path('profiles') . '/' . $nombreImagen;
            $imagenServidor->save($imagenPath);
        }

        // Update
        $User = User::find(auth()->user()->id);
        $User->username = $request->username;
        if ($request->imagen) {
            $User->imagen = $nombreImagen;
        }
        $User->save();

        return redirect()->route('posts.index', $User->username);
    }
}
