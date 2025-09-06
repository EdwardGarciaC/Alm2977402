@extends('layouts.app')
@section('Productos')
@section('contenido')
    <h1 class="text-center text-red-800 text-s"> LISTA DE PRODUCTOS</h1>
    <ul> 
    {{-- -Se utiliza la etiqueta @foreach para hacer un recorrido de todos los productos --}}    
        @foreach ($productos as $producto)
        {{-- -Hay qaue definir en el controlador la variable productos --}}
            <li>
                {{ $producto->nombre }} - precio: {{ $producto->precio }} - cantidad {{ $producto->cantidad }}
            </li>
        @endforeach
    </ul>
@endsection
