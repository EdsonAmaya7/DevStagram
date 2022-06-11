@extends('layouts.app')


@section('titulo')
{{ $post->titulo }}
@endsection

@section('contenido')
<div class="container mx-auto flex">

    <div class="md:w-1/2">
        <img src="{{ asset('uploads') . '/' . $post->imagen }}" alt="Imagen del post {{ $post->titulo }}">

        <div class="p-3">
            <p>0 likes</p>
        </div>

        <div>
            <p class="font-bold">{{ $post->user->username }}</p>
            <p class="text-sm text-gray-500">
                {{ $post->created_at->diffForhumans() }}
            </p>
            <p class="mt-5">
                {{ $post->descripcion }}
            </p>
        </div>
    </div>

    <div class="md:w-1/2">

        <div class="shadow bg-white p-5 m-5">

            @auth


            <p class="text-xl font-bold text-center mb-4">Agrega un Nuevo Comentario</p>

            <form action="">


                <div class="mb-5">
                    <label for="comentario" class="mb-2 block uppercase
                            text-gray-500 font-bold">
                        Descripción
                    </label>

                    <textarea cols="30" rows="10" type="text" id="comentario" name="comentario" placeholder="Descripción de la publicación" class="border p-3 w-full rounder-lg

                            @error('comentario') border-red-500 @enderror ">

                    </textarea>

                    @error('comentario')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm
                                p-2 text-center">
                        {{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Comentar" class="bg-sky-600
                    hover:bg-sky-700
                    transition-colors cursor-pointer
                    uppercase font-bold w-full p-3 text-white rounded-lg">

        </form>
        @endauth
        </div>
    </div>
</div>
@endsection
