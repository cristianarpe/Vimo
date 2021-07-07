@extends('layouts.appadmin') 
@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">              
        <div id="contenido">
        <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h1 class="mb-8 display-1 text-center" id="titulo_body">Bienvenido Administrador</h1>
                    <p class="lead text-muted">Aqui Puede gestionar el contenido de la base de datos directamente:</p>
                </div>

                <div class="col-lg-3 d-flex">
                    <form class="form-inline position-relative " action="" method="POST">
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
                <table class="table table-hover table-dark table-bordered text-center" id="tablapeliculas">{{-- table table-striped --}}
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Pelicula</th>
                    <th>Genero</th>
                    <th>Formato</th>
                    <th>Actor</th>
                    <th>Duracion</th>
                    <th>Fecha estreno</th>
                    <th>Calificacion</th>
                    <th>Portada</th>
                    <th>archivo</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrador as $peli)
                <tr>
                    <td>{{ $peli->id }}</td>                    
                    <td>{{ $peli->nombre_pelicula }}</td>
                    <td>Genero</td>
                    <td>Fomato</td>
                    <td>{{ $peli->reparto }}</td>
                    <td>{{ $peli->duracion }}</td>
                    <td>{{ $peli->fecha_estreno }}</td>
                    <td><i class="icon ion-md-star"> </i>{{ $peli->calificacion }}</td>
                    <td>
                        <img width="100" src="{{ asset('storage').'/'.$peli->ruta_imagen }}" alt="">
                    </td>
                    <td>ruta archivo </td>
                    <td>
                        <a href="{{ url('administrador/'.$peli->id.'/edit') }}"class="btn btn-info"><i class="icon ion-md-create"></i></a>
                    </td>
                    <td>
                        <form action="{{ url('administrador/'.$peli->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" onclick="return confirm('Esta seguro de querer eliminar esta pelicula?')" class="btn btn-danger"><i class="icon ion-md-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div> 

</div> <!--Todo lo que aparece en la pagina debe estar antes de este cierre id content -->
    @endsection