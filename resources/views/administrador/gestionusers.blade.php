@extends('layouts.appadmin')
@section('content')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <div id="contenido">
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="mb-8 display-1 text-center" id="titulo_body">Administración de Usuarios</h1>
                        <p class="lead text-muted"> Gestione los Usuarios</p>
                    </div>

                    <div class="col-lg-3 d-flex">
                        <form class="form-inline position-relative " action="peliculas.php" method="POST">
                            <input class="w-100 align-self-center form-control" type="search" placeholder="Buscar en la BD"
                                aria-label="Buscar">
                            <button class="btn btn-search position-absolute" type="submit"><i
                                    class="icon ion-md-search"></i></button>
                    </div>
                    </form>
                </div>
            </div>
        </section>

        <div class="container">
            <table class="table table-hover table-dark table-bordered text-center" id="tablapeliculas">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre usuario </th>
                        <th>Correo</th>
                        <th>telefono</th>
                        <th>Edad</th>
                        <th>Estado</th>
                        <th>Intereses</th>
                        <th>Suscripcion</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($usuarios as $user)
                <tr>
                    <td>{{ $user->id }}</td>                    
                    <td>{{ $user->nombre_pelicula }}</td>
                    <td>Genero</td>
                    <td>Fomato</td>
                    <td>{{ $user->reparto }}</td>
                    <td>{{ $user->duracion }}</td>
                    <td>{{ $user->fecha_estreno }}</td>
                    <td><i class="icon ion-md-star"> </i>{{ $user->calificacion }}</td>
                    <td>
                        <a href="{{ url('peliculas/'.$user->id.'/edit') }}"class="btn btn-info"><i class="icon ion-md-create"></i></a>
                    </td>
                    <td>
                        <form action="{{ url('peliculas/'.$user->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" onclick="return confirm('Esta seguro de querer eliminar este usuario?')" class="btn btn-danger"><i class="icon ion-md-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

    <!--Todo lo que aparece en la pagina debe estar antes de este cierre id content -->
@endsection
