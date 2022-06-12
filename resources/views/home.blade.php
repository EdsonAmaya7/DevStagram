@extends('layouts.app')


@section('titulo')
    Pagina Principal
@endsection


@section('contenido')


{{-- @forelse ($posts as $post)
        <h1>{{ $posts->titulo }}</h1>
    @empty
        <h1>sin posts</h1>
    @endforelse --}}


    {{-- <x-listar-post>

        <x-slot:titulo>
            <header>titulo slot header </header>
        </x-slot:titulo>

        mostrando desde slot
    </x-listar-post> --}}




    <x-listar-post :posts="$posts" />




@endsection
