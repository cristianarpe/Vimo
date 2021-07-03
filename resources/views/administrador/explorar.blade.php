@extends('layouts.appadmin') 
@section('content')
<link href="{{asset('css/styles.css') }}" rel="stylesheet">              

        <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1 class="mb-8 text-center" id="titulo_body" >Explore el Catalogo de Peliculas Disponible</h1>
                    <p class="lead text-muted">Desde esta vista puede hacer Cambios:</p>
                </div>

                <div class="col-lg-2 d-flex">
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
    
    <div class="row container"> <!-- aca inicia la muestra de las imagenes en grilla-->
                        
           @foreach ($administrador as $peli)
           <div class="col-4 mt-3 p-3">
                <div class="card-deck">
                    <div class="card rounded border border-dark">
                        <img src="{{ asset('storage').'/'.$peli->ruta_imagen }}"
                            class="card-img-top" alt="Aqui va la imagen de la BD">
                        <div class="card-body">
                            <h5 class="card-title text-center text-uppercase">
                              <strong>  {{ $peli->nombre_pelicula }}</strong>
                            </h5>
                            <p class="card-text"><i class="icon ion-md-contacts"></i> Actor:
                                {{ $peli->reparto }}
                            </p>
                            <p class="card-text"><i class="icon ion-md-time"></i> Duracion:
                                {{ $peli->duracion }}
                            </p>
                            <p class="card-text"><i class="icon ion-md-videocam"></i> Estreno:
                                {{ $peli->fecha_estreno }}
                            </p>
                            <p class="card-text">Calificacion: <i class="icon ion-md-star"> </i>
                                {{ $peli->duracion }}
                            </p>
                            
                            <ul class="list-inline">
                            <li class="list-inline-item"><a href="" class="btn btn-success"><i class="icon ion-md-eye" id="botones_content"></i></a></li>
                            <li class="list-inline-item"><a href="{{ url('administrador/'.$peli->id.'/edit') }}"class="btn btn-info"><i class="icon ion-md-create"></i></a></li>
                            <li class="list-inline-item">
                                <form action="{{ url('administrador/'.$peli->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                      <button type="submit" onclick="return confirm('¿Está seguro de querer eliminar esta pelicula?')" class="btn btn-danger" ><i class="icon ion-md-trash"></i></button>
                            </form>
                        </li>
                         </ul>
                        
                        
                        
                        </div>
                    </div>
                </div>
            </div>
            @endforeach                          
        </div> <!-- aca termina la muestra de peliculas en GRILLA -->

 <!--Todo lo que aparece en la pagina debe estar antes de este cierre id content -->
    @endsection