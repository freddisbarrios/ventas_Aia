
@extends('layouts.aplica')
@section('titulo','ventas de Inmuebles AIA')
@section('contenido')

<div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 m-4">
    @foreach ($inmuebles as $inmueble)
    <div class="card w-50 bg-base-100 shadow-xl">
        <figure><img src="http://source.unsplash.com/random/800x600/?house& {{$inmueble->nombre_producto}}" alt="{{$inmueble->nombre_producto}}"></figure>
        <div class="card-body">
            <h2 class="card-title">
            {{$inmueble->nombre_producto}}
            <div class="badge badge-secondary text-xs">nuevo</div>    

            </h2>
            <p>{{ Str::limit($inmueble->descripcion,50)}}</p>
            <div class="card-actions justify-end">
                <div class="badge badge-outline">$ {{$inmueble->precio}}</div>
                <div class="badge badge-outline">Stock: {{$inmueble->stock}}</div>
                <div class="badge badge-outline">Mas imagenes: {{$inmueble->imagen}}</div>
                <div class="badge badge-outline">Pais: {{$inmueble->pais}}</div>
                <div class="badge badge-outline">Ciudad: {{$inmueble->ciudad}}</div>
                <div class="badge badge-outline">Lugar: {{$inmueble->lugar}}</div>
                <div class="badge badge-outline">Estrato: {{$inmueble->estrato}}</div>
            </div>

        </div>

    </div>
        
    @endforeach

</div>
@endsection