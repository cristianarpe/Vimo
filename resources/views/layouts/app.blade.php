<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vimo') }}</title> 

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/3446b5d1bc.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/vimo.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">


</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand active letrav" style="color:#ffff" href="index.html"><img src="img/Logo_Vimo.JPG" width="120"
                    height="80" alt="Logo Vimo">
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ml-5">
                <input type="text" placeholder="Buscar" size="50" class="ml-5">
                <i class="fas fa-search" style="font-size: 15px; color:#ffff ;"></i>

                
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link letrav" style="color:#ffff" href="{{url('iniciouser')}}">INICIO</a>
                    </li>
                    <li class="nav-item letrav">
                        <a class="nav-link " style="color:#ffff" href="{{url('seriesuser')}}">SERIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link letrav" style="color:#ffff" href="{{url('peliculasuser')}}">PELICULAS</a>
                    </li>                        
                    <li class="nav-item mr-3">
                        <span style="font-size: 20px; color:#ffff ;">
                            <i class="fas fa-user fa-sx mt-2 ml-2 mr-2"></i>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>     
    <main class="py-0">
        @yield('content')
    </main>  
    </div>      
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
