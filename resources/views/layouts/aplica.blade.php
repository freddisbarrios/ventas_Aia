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
            Bienvenido {{$nombre}}!
        </div>
    </header>
    <main>
        @yield('contenido')
    </main>
    <footer>
    @include('layouts.footer')
    </footer>
</body>
</html>