@extends('layouts.nuevoaplica')
@section('titulo','ventas de Inmuebles AIA')
@section('contenido')

    <<div class="hero min-h-screen bg-base-200">
        <div class="hero-content text-center">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">¡Bienvenido! {{ auth()->user()->name }}</h1>
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            <a href="{{route('inmuebles.index')}}" class="btn btn-primary">Ver modelos </a>
          </div>
        </div>
      </div>
@endsection
