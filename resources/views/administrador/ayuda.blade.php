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
                  <h5 class="card-title"><i class="icon ion-md-globe"></i> Contenido</h5>
                  <p class="card-text">Administre el contenido de la aplicacion Web desde el incio del Dashboard</p>
                </div>
                <div class="card-footer">
                  <a href="{{ url('administrador/') }}" class="btn btn-warning btn-block"><i class="icon ion-md-globe"></i> Ir al Inicio</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="{{ asset('img/ayuda2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><i class="icon ion-md-trophy"></i> Permisos Administrador</h5>
                  <p class="card-text">¡Felicidades!, eres un administrador y podras Agregar, editar o eliminar peliculas y gestionar los usuarios.</p>
                </div>
                <div class="card-footer">
                  <a href="{{ url('administrador/explorar') }}" class="btn btn-primary btn-block"><i class="icon ion-md-easel"></i> Explore el contenido</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top img-fluid" src="{{ asset('img/logofondo.JPG') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><i class="icon ion-md-analytics"></i> Estamos en crecimiento</h5>
                  <p class="card-text"><i class="icon ion-md-cafe"></i> Vimo Peliculas es un servicio en desarrollo, por lo cual algunas funciones se encuentran en constante mejora. </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Continuamos en Desarrollo...</small>
                </div>
              </div>
            </div>
            <hr>
            <div class="container">
              
                <h2 class="text-center">  Siguenos En nuestras Redes Sociales </h2>
                <div class=" flex-container mt-3">    
                  <div class=" d-flex justify-content-center align-items-center">
                <a href="https://www.facebook.com/" target="_blank" class="mr-3" style="font-size: 80px"><i class="icon ion-logo-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank" class="mr-3" style="font-size: 80px"><i class="icon ion-logo-instagram"></i></a>
                <a href="https://twitter.com/?lang=es" target="_blank" class="mr-3" style="font-size: 80px"><i class="icon ion-logo-twitter"></i></a>
                <a href="https://www.youtube.com/" target="_blank" class="mr-3" style="font-size: 80px"><i class="icon ion-logo-youtube"></i></a>
                <a href="https://www.whatsapp.com/" target="_blank" class="mr-3" style="font-size: 80px"><i class="icon ion-logo-whatsapp"></i></a>
            </div>
          </div>
              <p class="footer-bottom-text text-center"> &copy; Grupo 1 Bictia-Colsubsidio
                  2021 </p>
            </div>
      </div>     
          
    @endsection