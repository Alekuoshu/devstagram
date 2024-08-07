<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index(User $user)
    {
        $posts = Post::where('user_id', $user->id)->latest()->paginate(8);

        return view('dashboard', [
            'user' => $user,
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required|max:400',
            'imagen' => 'required'
        ]);

        Post::create([
            'user_id' => auth()->user()->id,
            'titulo' => $request->input('titulo'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
        ]);

        // Otra forma
        // $post = new Post();
        // $post->user_id = auth()->user()->id;
        // $post->titulo = $request->input('titulo');
        // $post->descripcion = $request->input('descripcion');
        // $post->imagen = $request->input('imagen');
        // $post->save();

        // $request->user()->posts()->create([
        //     'user_id' => auth()->user()->id,
        //     'titulo' => $request->input('titulo'),
        //     'descripcion' => $request->input('descripcion'),
        //     'imagen' => $request->input('imagen'),
        // ]);




        return redirect()->route('posts.index', auth()->user()->username);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show(User $user, Post $post)
    {
        return view('posts.show', [
            'post' => $post,
            'user' => $user
        ]);
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();

        // Eliminar imagen
        $imagen_path = public_path('uploads/' . $post->imagen);
        if (File::exists($imagen_path)) {
            unlink($imagen_path);
        }

        return redirect()->route('posts.index', auth()->user()->username);
    }
}
