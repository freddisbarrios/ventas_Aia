<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('titulo','SENA2024')</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <header>
        @include('layouts.nav')
        <div class="text-end text-lg font-bold text-green-800 mr-6 text-">
         
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