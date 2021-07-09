<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{$title_page}} - Vimo Peliculas</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">


</head>

<body>
    <div id="app">
        
        <div class="d-flex">
            <div id="sidebar-container" class="bg-primary">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="VIMO-logo" id="texto_logo">
                    <!-- <h4 class="text-light font-weight-bold text-center" >Vimo</h4> -->
                </div>
                <div class="menu">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-light" aria-disabled="true" id="botones_content">
                            Panel
                            Administrador</li>
                        <li><a href="{{ url('administrador/') }}" class="d-block text-light p-3 list-group-item"><i
                                    class="icon ion-md-home mr-3 lead" id="botones_content"></i>Inicio Dashboard</a>
                        </li>
                        <li><a href="{{ url('administrador/explorar') }}"
                                class="d-block text-light p-3 list-group-item"><i {{-- href="{{ url('peliculas/explorar')}}" --}}
                                    class="icon ion-md-compass mr-3 lead" id="botones_content"></i></i>Explorar</a>
                        </li>
                        <li> <a href="{{ url('administrador/gestionusers') }}"
                                class="d-block text-light p-3 list-group-item"><i class="icon ion-md-person mr-3 lead"
                                    id="botones_content"></i>Gestión Usuarios</a> </li>

                        <li> <a href="{{ url('administrador/create') }}"
                                class="d-block text-light p-3 list-group-item"><i class="icon ion-md-folder mr-3 lead"
                                    id="botones_content"></i>Nueva Pelicula</a> </li>
                        <li class="list-group-item list-group-item-light" aria-disabled="true" id="botones_content">
                            Otros</li>
                        <li> <a href="{{ url('administrador/ayuda') }}"
                                class="d-block text-light p-3 list-group-item"><i class="icon ion-md-help mr-3 lead"
                                    id="botones_content"></i>Ayuda</a> </li>

                    </ul>
                </div>
            </div>

            <div class="w-100">
                <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <form class="form-inline position-relative my-2 d-inline-block" action="" method="POST">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn btn-search position-absolute" type="submit"><i
                                    class="icon ion-md-search"></i></button>
                        </form>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ml-5">
                                <li class="nav-item active">
                                    <a class="nav-link ml-sm-5 mr-sm-2 disabled" id="text_oculto" href="">Inicio <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ml-sm-5 mr-sm-2 disabled" id="text_oculto" href="#"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ml-sm-5 mr-sm-2 disabled" id="text_oculto" href="#">Programas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ml-sm-5 mr-sm-2 disabled" id="text_oculto" href="#">Recientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ml-sm-5 mr-sm-2 disabled" id="text_oculto" href="#">Peliculas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ml-sm-5 mr-sm-3" id="text_nav" href="#">Lista</a>
                                </li>
                            </ul>
                        </div>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="text_nav" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/admin_img.png') }} "
                                            class="img-fluid rounded-circle mr-2 avatar" alt="" id="text_nav">
                                        Administrador
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#" id="botones_dash">Configurar</a>
                                        <a class="dropdown-item" href="#"><i class="icon ion-md-options"
                                                id="botones_dash"></i> Ajustes</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="icon ion-md-power mr-2 lead"
                                                id="botones_dash"></i>Cerrar
                                            Sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <main class="py-6" id="contenido">{{-- original:py-4 --}}
                    @yield('content')
                </main>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
</body>

</html>
