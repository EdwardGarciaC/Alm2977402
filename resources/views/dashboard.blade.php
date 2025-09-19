@extends('layouts.app')
@section('titulo','Dashboard')
@section('cabecera', 'Dashboard')
@section('contenido')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="hero min-h-screen bg-base-200 rounded-2xl">
                <div class="hero-content text-center">
                  <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Hola {{ auth()->user()->name }}</h1>
                    <p class="py-6">Bienvenido al tablero principal de la app Alm2977402 - Continuar con consultar productos.</p>
                    <a href="{{ route('productos.index') }}" class="btn btn-primary">Consultar productos</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
