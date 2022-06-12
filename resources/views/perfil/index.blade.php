@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{ auth()->user()->username }}
@endsection


@section('contenido')
    <div class="md:flex md:justify-center mt-3">
        <div class="md:w-1/2 bg-white shadow p-6">

            <form action="{{ route('perfil.store') }}" enctype="multipart/form-data" method="POST" class="mt-10 md:mt-0">
                @csrf

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase
            text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Tu username"
                        class="border p-3 w-full rounder-lg

                        @error('username') border-red-500 @enderror "
                        value="{{ auth()->user()->username }}">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm
                            p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase
            text-gray-500 font-bold">
                        Imagen Perfil
                    </label>
                    <input type="file" id="imagen" name="imagen"
                        class="border p-3 w-full rounder-lg"
                        accept=".jpg, .jpeg, .png"
                        value="">


                </div>

                <input type="submit" value="Guardar Cambios"
                class="bg-sky-600
        hover:bg-sky-700
            transition-colors cursor-pointer
            uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>


        </div>
    </div>
@endsection
