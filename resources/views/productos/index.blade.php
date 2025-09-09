@extends('layouts.app')
@section('titulo','Los productos')
@section('contenido')
{{-- Boton para crear un nuevo producto--}}
<div class="flex justify.end m-4"></div>
 <a href="{{ route('productos.create') }}" class="btn btn-outline btn-xs" >Nuevo producto</a>
<div class= "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-30 m-1"> 
        @foreach ($productos as $producto )
<div class="card bg-base-100 w-96 shadow-sm">
  <figure>
    <img
      src="https://picsum.photos/id/{{$producto->id}}/240"
      alt="{{$producto->nombre}}" />
  </figure>
  <div class="card-body">
    <h2 class="card-title">{{$producto->nombre}}</h2>
    <div class="badge badge-accent">{{$producto->precio}}</div>
    <p>{{Str::limit($producto->descripcion,30)}}</p>
    <div class="card-actions justify-end">
    {{-- <button class="btn btn-primary">Buy Now</button> --}}
    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-outline btn-xs" >Editar</a>
    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline btn xls">Eliminar</button>
                 </form>

    </div>
  </div>
</div>
        @endforeach
@endsection

