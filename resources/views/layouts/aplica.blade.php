<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo','ventas')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        @include('layouts.navbar')
        <div class="text-end text-lg font-bold text-green-800 mr-6 text-">
            Bienvenido Fredis Barrios!
        </div>
    </header>
    <main>
        <div class="bg-green-100 my-6 text-center">
            <h1
            class="text-lg font-semibold uppercase h-100">@yield('cabecero')</h1>

        </div>
        @yield('contenido')
    </main>
    <footer>
    @include('layouts.footer')
    </footer>
</body>
</html>