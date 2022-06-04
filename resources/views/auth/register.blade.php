@extends('layouts.app ')


@section('titulo')
    Registrate en DevsTagram
@endsection


@section('contenido')
    <div class="md:flex md:justify-center md:gap-7 md:items-center mt-7">
        <div class="md:w-5/12 p-4">
            <img src="{{ asset('img/registrar.jpg') }}" alt="imagen de registro">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">

            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase
            text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" id="name" name="name" placeholder="Tu Nombre"
                        class="border p-3 w-full rounder-lg
                @error('name') border-red-500 @enderror "
                        value="{{ old('name') }}">

                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm
                    p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase
            text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounder-lg   @error('username') border-red-500 @enderror "
                        value="{{ old('username') }}">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm
                    p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase
            text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="email" id="email" name="email" placeholder="Tu Email"
                        class="border p-3 w-full rounder-lg
                @error('email') border-red-500 @enderror "
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm
                p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase
            text-gray-500 font-bold">
                        password
                    </label>
                    <input type="password" id="password" name="password" placeholder="password"
                        class="border p-3 w-full rounder-lg   @error('password') border-red-500 @enderror ">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm
                    p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase
            text-gray-500 font-bold">
                        password confirmation
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="repite tu password"
                        class="border p-3 w-full rounder-lg @error('password_confirmation') border-red-500 @enderror ">
                </div>

                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600
            hover:bg-sky-700
                transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>

    </div>
@endsection
