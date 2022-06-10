@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('titulo')
    Crea una nueva Publicación
@endsection


@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form id="dropzone" method="POST" enctype="multipart/form-data" action="{{ route('imagenes.store') }}"
                class="dropzone border-dashed border-2 w-full h-96
            rounded flex flex-col justify-center items-center">
                @csrf

            </form>
        </div>

        <div class="md:w-1/2 px-10 bg-white p-10 rounded-lg shadow-lg mt-10 md:mt-3">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase
            text-gray-500 font-bold">
                        titulo
                    </label>
                    <input type="text" id="titulo" name="titulo" placeholder="Titulo de la publicación"
                        class="border p-3 w-full rounder-lg
                @error('titulo') border-red-500 @enderror "
                        value="{{ old('titulo') }}">

                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm
                    p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase
            text-gray-500 font-bold">
                        Descripción
                    </label>

                    <textarea cols="30" rows="10" type="text" id="descripcion" name="descripcion"
                        placeholder="Descripción de la publicación"
                        class="border p-3 w-full rounder-lg
                @error('descripcion') border-red-500 @enderror ">
                     {{ old('descripcion') }}
                    </textarea>

                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm
                    p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="text" name="imagen" type="text" hidden
                    value="{{ old('imagen') }}">
                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm
                p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Publicar"
                    class="bg-sky-600
        hover:bg-sky-700
            transition-colors cursor-pointer
            uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
