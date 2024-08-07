<div>
    @if ($posts->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($posts as $post)
                <div class="bg-white shadow p-5 rounded-lg">
                    <a href="{{ route('posts.show', ['user' => $post->user, 'post' => $post]) }}">
                        <img class="w-full h-64 object-cover object-center" src="{{ asset('uploads/' . $post->imagen) }}"
                            alt="Imagen del Post">
                    </a>

                    <div class="my-4">
                        <h3 class="font-bold text-center"> {{ $post->titulo }} </h3>
                    </div>

                </div>
            @endforeach
        </div>
        <div class="my-10">
            {{ $posts->links() }}
        </div>
    @else
        <p class="text-center text-gray-600 uppercase test-sm font-bold">No hay publicaciones aún, sigue a alguien para
            mostrar sus publicaciones.</p>
    @endif
</div>
