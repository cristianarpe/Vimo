@extends('layouts.app')
@section('content')
<div class="container bg-light col-12 px-3">

    <div class="row bg-light">
        <div class="col-12 text-center">
            <strong style="color:#ffff" class="letA">Peliculas</strong>
        </div>            
    </div>
    <div class="row bg-light">
        <div class="col-12">
            <strong style="color:#ffff" class="letA">Accion</strong>
        </div>            
    </div>
    <div class="row justify-content pb-2">
        <div class="col">
            <img src={{ asset('img/Accion/mortal_kombat.jpg')}} class="w-100" height="200px" alt="...">
        </div>
        <div class="col">
            <img src={{ asset('img/Accion/liga_de_la_justicia.jpg') }} class="w-100" height="200px" alt="">
        </div>
        <div class="col">
            <img src={{ asset('img/Accion/Godzilla-vs-Kong.jpg')}}  class="w-100" height="200px" alt="">
        </div>
    </div>
    <div class="row justify-content pb-2">
        <div class="col">
            <img src={{ asset('img/Accion/sherlock.jpeg')}} class="w-100" height="200px" alt="...">
        </div>
        <div class="col">
            <img src={{ asset('img/interestelar.jpg')}} class="w-100" height="200px" alt="">
        </div>
        <div class="col">
            <img src={{ asset('img/Accion/thor.jpg')}}  class="w-100" height="200px" alt="">
        </div>
    </div>

    <div class="row justify-content pb-2">
        <div class="col">
            <img src={{ asset('img/Accion/spiderman.jpg')}}  class="w-100" height="200px" alt="...">
        </div>
        <div class="col">
            <img src={{ asset('img/Accion/ironman.jpg')}}  class="w-100" height="200px" alt="">
        </div>
        <div class="col">
            <img src={{ asset('img/Accion/hulk.jpg')}}  class="w-100" height="200px" alt="">
        </div>
    </div>

    <div class="row bg-light">
        <div class="col-12">
            <strong style="color:#ffff" class="letA">Terror</strong>
        </div>            
    </div>
    <div class="row justify-content pb-2">
        <div class="col">
            <img src={{ asset('img/Terror/It.jpg')}} class="w-100" height="200px" alt="...">
        </div>
        <div class="col">
            <img src={{ asset('img/Terror/El_conjuro_1.jpg')}} class="w-100" height="200px" alt="">
        </div>
        <div class="col">
            <img src={{ asset('img/Terror/El_conjuro_2.jpg')}}  class="w-100" height="200px" alt="">
        </div>
    </div>
    <div class="row justify-content pb-2">
        <div class="col">
            <img src={{ asset('img/Terror/El_conjuro_3.jpg')}} class="w-100" height="200px" alt="...">
        </div>
        <div class="col">
            <img src={{ asset('img/Terror/Annabelle.jpg')}} class="w-100" height="200px" alt="">
        </div>
        <div class="col">
            <img src={{ asset('img/Terror/Annabelle_2.jpg')}}  class="w-100" height="200px" alt="">
        </div>
    </div>

    <div class="row justify-content pb-2">
        <div class="col">
            <img src={{ asset('img/Terror/El_resplandor.jpg')}} class="w-100" height="200px" alt="...">
        </div>
        <div class="col">
            <img src={{ asset('img/chuky.jpg')}}  class="w-100" height="200px" alt="">
        </div>
        <div class="col">
            <img src={{ asset('img/Terror/nosferatu.jpg')}}  class="w-100" height="200px" alt="">
        </div>
    </div>

    <div class="row bg-light">
        <div class="col-12">
            <strong style="color:#ffff" class="letA">Comedia</strong>
        </div>            
    </div>
    <div class="row justify-content pb-2">
        <div class="col">
            <img src={{ asset('img/son_como_niños.jpg')}} class="w-100" height="200px" alt="...">
        </div>
        <div class="col">
            <img src={{ asset('img/Comedia/big_mamma.jpg')}}  class="w-100" height="200px" alt="">
        </div>
        <div class="col">
            <img src={{ asset('img/Comedia/que_paso_ayer.jpg')}} class="w-100" height="200px" alt="">
        </div>
    </div>
    <div class="row justify-content pb-2">
        <div class="col">
            <img src={{ asset('img/Comedia/paranormal_movie.jpg')}} class="w-100" height="200px" alt="...">
        </div>
        <div class="col">
            <img src={{ asset('img/Comedia/donde_esta_el_fantasma_2.jpg')}} class="w-100" height="200px" alt="">
        </div>
        <div class="col">
            <img src={{ asset('img/Comedia/scary_movie.jpg')}}  class="w-100" height="200px" alt="">
        </div>
    </div>

    <div class="row justify-content pb-2">
        <div class="col">
            <img src={{ asset('img/Comedia/scar_movie_2.jpg')}} class="w-100" height="200px" alt="...">
        </div>
        <div class="col">
            <img src={{ asset('img/Comedia/Scary_Movie_3.png')}}  class="w-100" height="200px" alt="">
        </div>
        <div class="col">
            <img src={{ asset('img/Comedia/scary_movie_4.jpg')}} class="w-100" height="200px" alt="">
        </div>
    </div>

    
</div>
@endsection


