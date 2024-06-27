@extends('layouts.nuevoaplica')
@section('titulo','Dashboard')
@section('contenido')

    <<div class="hero min-h-screen bg-base-200">
        <div class="hero-content text-center">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">¡Bienvenido! {{ auth()->user()->name }}</h1>
            <p class="py-6">hola! {{ auth()->user()->name }} esto es lo que tengo para tí</p>
            <a href="{{route('inmuebles.index')}}" class="btn btn-primary">Ver modelos </a>
          </div>
        </div>
      </div>
@endsection
