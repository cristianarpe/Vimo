@extends('layouts.appadmin') 
@section('content')
<link href="{{asset('css/styles.css') }}" rel="stylesheet">              

        <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="mb-8 text-center" id="titulo_body" >¿Necesitas Ayuda?</h1>
                    <p class="lead text-muted text-center">Como podemos ayudarte</p>
                </div>

                  <div class="">
                    <h4 class="container display-4">Preguntas Frecuentes</h4>
                  </div>
            </div>
        </div>
        </section>  
    
    <div class="container"> <!-- aca inicia la muestra de las imagenes en grilla-->
        
        <br>
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{ asset('img/ayuda1.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Ayuda 1</h5>
                <p class="card-text">Administre el contenido de la aplicacion Web en el incio del Dashboard</p>
              </div>
              <div class="card-footer">
                <a href="{{ url('administrador/') }}" class="btn btn-warning btn-block">Ir al Inicio</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('img/ayuda2.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Ayuda 2</h5>
                <p class="card-text">Puede acceder a opciones avanzadas como administrador como: Agregar, editar o eliminar</p>
              </div>
              <div class="card-footer">
                <a href="{{ url('administrador/explorar') }}" class="btn btn-primary btn-block">Explore el contenido</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('img/logofondo.JPG') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Ayuda 3</h5>
                <p class="card-text">Vimo Peliculas es un servico en desarrollo, por lo cual algunas funciones se encuentran en constante mejora.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Continuamos en Desarrollo...</small>
              </div>
            </div>
          </div>
          <hr>
          <div>
            <p class="footer-bottom-text text-center"> &copy; Grupo 1 Bictia-Colsubsidio
                2021 </p>
          </div>
    </div>       
          
    @endsection