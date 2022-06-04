<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Devstagram - @yield('titulo')</title>

</head>


<body class="bg-gray-100">

    <header class="p-5 border-b bg-white shadow">

    <div class="container mx-auto flex justify-between items-center">

        <h1 class="text-3xl font-black">DevStagram</h1>

        <nav class="flex gap-2 items-center">
        <a href="#" class="font-bold uppercase text-gray-600 text-sm">Login</a>
        <a href="{{ route('register.index') }}" class="font-bold uppercase text-gray-600 text-sm">Crear Cuenta</a>
        </nav>

    </div>

    </header>


    <main class="container mx-auto mt-10">

        <h2 class="font-black text-center text-3xl mt-10">@yield('titulo')</h2>
        @yield('contenido')
    </main>

    <footer class="text-center p-5 mt-10 text-gray-500 font-bold uppercase">

        DevStagram -Todos los derechos reservados
            {{ now()->year  }}

    </footer>
</body>

</html>
