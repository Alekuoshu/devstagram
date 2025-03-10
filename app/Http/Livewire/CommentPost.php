<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class CommentPost extends Component
{
    public $comentario;

    public $post;

    public $user;

    public EloquentCollection $comentarios;

    public function mount($post)
    {
        $this->post = $post;
        $this->user = auth()->user();
        $this->comentarios = $post->comentarios()->latest()->get();
    }

    public function store()
    {
        // validar
        $this->validate([
            'comentario' => 'required|max:255|min:3'
        ]);
        // almacenar
        $newComment = Comentario::create([
            'user_id' => $this->user->id,
            'post_id' => $this->post->id,
            'comentario' => $this->comentario
        ]);

        $this->comentarios->push($newComment);
        $this->comentarios = $this->comentarios->sortByDesc('created_at');
        session()->flash('mensaje', 'Comentario creado con éxito.');
        $this->reset('comentario');
    }


    public function render()
    {
        return view('livewire.comment-post');
    }
}
