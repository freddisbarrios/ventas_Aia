
@extends('layouts.aplica')
@section('titulo','ventas de Inmuebles AIA')
@section('contenido')

<div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 m-4">
    @foreach ($inmuebles as $inmueble)
    <div class="card w-50 bg-base-100 shadow-xl">
        <figure><img src="http://source.unsplash.com/random/800x600/?departments& {{$inmueble->nombre_producto}}" alt="{{$inmueble->nombre_producto}}"></figure>
        <div class="card-body">
            <h2 class="card-title">
            {{$inmueble->nombre_producto}}
            <div class="badge badge-secondary text-xs">nuevo</div>    

            </h2>
            <p>{{ Str::limit($inmueble->descripcion,50)}}</p>
            <div class="card-actions ">
                <ul>
                    <li>precio: $ {{$inmueble->precio}}</li>
                
                    <li>Stock: {{$inmueble->stock}}</li>
                    <li>Mas imagenes: {{$inmueble->imagen}}</li>
                    <li>Pais: {{$inmueble->pais}}</li>
                    <li>Ciudad: {{$inmueble->ciudad}}</li>
                    <li>Lugar: {{$inmueble->lugar}}</li>
                    <li>Estrato: {{$inmueble->estrato}}</li>
                </ul>
            </div>
            <div class=" flex ">
                <div class="bg-green-800 hover:bg-green-700 text-white text-x py-2 px-4 rounded-lg m-4" >
                    <a href="{{route('inmuebles.edit',$inmueble->id)}}">Editar</a> 
                </div>
                <form action="{{route('inmuebles.destroy', $inmueble->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-green-800 hover:bg-green-700 text-white text-x py-2 px-4 rounded-lg m-4" type="submit">Eliminar</button>
               
                
                </form>

            </div>

        </div>


    </div>
        
    @endforeach

</div>
@endsection