<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('CRUD  Nivelación SRCO') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" >
                    {{ __('Almacen SRCO') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('vendedores.index') }}">{{ __('Vendedores') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('clientes.index') }}">{{ __('Clientes') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('detalles.index') }}">{{ __('Detalles') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productos.index') }}">{{ __('Productos') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pedidos.index') }}">{{ __('Pedidos') }}</a>
                                </li>

                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
<footer class="text-center footer-style">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <h3>Dirección</h3>
                <p>
                    Xicotepec de Juárez, Puebla - México <br />
                    Fuerte de San Juan #157
                </p>
            </div>
            <div class="col-md-4 footer-col">
               
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/ultrond28/" class="fa fa-facebook"></a>
                        <a href="https://twitter.com/salimcastro12" class="fa fa-twitter"></a>
                        <a href="https://www.instagram.com/_salimcastro/" class="fa fa-instagram"></a>
                        <a href="https://www.youtube.com/channel/UCmNc5mz9tjl3OmIwy_Ym2xg" class="fa fa-youtube"></a>

                    </li>
                </ul>
            </div>
            <div class="col-md-4 footer-col">
                <h3>Salim Rafael Castro Ortiz</h3>
                <p>Estudiante de Ingeniería en Desarrollo y Gestión de Software</p>
            </div>
        </div>
    </div>
</footer>
</html>
