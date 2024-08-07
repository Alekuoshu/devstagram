@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{ Auth::user()->username }}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-6/12 bg-white p-6 rounded-lg">
            @if (session('info'))
                <p class="text-red-500 text-center">{{ session('info') }}</p>
            @endif

            <form class="mt-10 md:mt-0" action="{{ route('profile.store', $user) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre de usuario
                    </label>
                    <input type="text" name="username" id="username" placeholder="Tu Nombre de usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('username', Auth::user()->username) }}" />

                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">
                        Imagen Perfil
                    </label>
                    <input type="file" name="imagen" id="imagen"
                        class="border p-3 w-full rounded-lg @error('imagen') border-red-500 @enderror"
                        accept=".jpg, .png, .jpeg, .webp" />

                </div>


                <div class="mb-5">
                    <input type="submit" value="Actualizar Perfil"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                </div>
            </form>
        </div>
    </div>
@endsection
