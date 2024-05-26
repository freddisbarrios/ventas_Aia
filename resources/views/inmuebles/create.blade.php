
@extends('layouts.aplica')
@section('titulo','ventas de Inmuebles AIA')
@section('cabecero','crear producto')
@section('contenido')

<div class="flex justify-center my-6">
    <div class="card w-100 shadow-lg bg-base-200">
        <div class="card-body">
            <form action="{{ route('inmuebles.store') }}" method="post">
                @csrf
                {{--Nombre--}}
                <div>
                  <label for="nombre_producto" class="label">Nombre del producto</label>
                  <input type="text" class="input input-bordered" name="nombre_producto" id="nombre_producto" placeholder="nombre del producto!" required />
                </div>
                {{--Descripcion--}}
                <div>
                    <label for="descripcion" class="label">Descripcion</label>
                    <input type="text" class="input input-bordered" name="descripcion" id="descripcion" placeholder="descripción  del producto!" />
                  </div>
                  {{--Precio--}}
                <div>
                    <label for="precio" class="label">Precio del producto</label>
                    <input type="number" class="input input-bordered" name="precio" id="precio" placeholder="ingrese el precio del producto!" required />
                  </div>
                    {{--stock--}}
                <div>
                    <label for="stock" class="label">Stock del producto</label>
                    <input type="number" class="input input-bordered" name="stock" id="stock" placeholder="stock del producto!" required />
                  </div>
                  {{--imagen--}}
                <div>
                    <label for="Imagen" class="label">Imagen</label>
                    <input type="textarea" class="textarea textarea-bordered" name="imagen" id="imagen" placeholder="imagen del producto!" required />

                  </div>
                   {{--pais--}}
                <div>
                    <label for="pais" class="label">país</label>
                    <input type="text" class="input input-bordered" name="pais" id="pais" placeholder="ingrese el pais" required />
                  </div>
                   {{--ciudad--}}
                <div>
                    <label for="ciudad" class="label">ciudad donde está ubicado el producto</label>
                    <input type="text" class="input input-bordered" name="ciudad" id="ciudad" placeholder=" nombre de la ciudad!" required />
                  </div>
                   {{--lugar--}}
                <div>
                    <label for="lugar" class="label">lugar</label>
                    <input type="text" class="input input-bordered" name="lugar" id="lugar" placeholder="lugar del producto!" required />
                  </div>
                   {{--estrato--}}
                <div>
                    <label for="estrato" class="label">Estrato</label>
                    <input type="text" class="input input-bordered" name="estrato" id="estrato" placeholder="ingrese el estrato del lugar!" required />
                  </div>
                  {{--boton--}}
                  <button class="bg-green-800 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg m-4" type="submit">Crear producto</button>
                  <a href="{{route('inmuebles.index')}}" class="bg-green-800 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg m-4">Cancelar</a>

            </form>
        </div>
    </div>
</div>
@endsection