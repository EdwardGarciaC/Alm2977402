<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('titulo'.'Alm2977402') </title>
</head>
<body>
     <!-- <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1> -->
<header>
    {{-- Colocando una barra de navegación Navbar--}}
    @include ('layouts.navbar')
    </header>

    <main>
        <div class="text-center bg-green-100 my-4">
            <h1 class="text-lg font-semibold m-4 uppercase">@yield('cabecera')</h1>
        </div>
     {{-- -Reservando espacio para el contenido de las vistas hijas --}}   
     @yield('contenido')
    </main>

    <footer>
     {{-- -Colocando el pie de página de las vistas --}}
     @include('layouts.footer')
    </footer>
    
</body>
</html>