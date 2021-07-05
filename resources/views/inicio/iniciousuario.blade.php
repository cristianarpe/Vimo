@extends('layouts.app')
@section('content')
{{-- Vista de usuario --}}
    
    <div id="SliderVimo" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#SliderVimo" data-slide-to="0" class="active"></li>
            <li data-target="#SliderVimo" data-slide-to="1"></li>
            <li data-target="#SliderVimo" data-slide-to="2"></li>
            
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active fon_1 w-100">
                <img src={{ asset('img/interestelar.jpg')}} class="d-block w-100" height="625px" alt="...">
                <div class="carousel-caption d-none d-md-block col-4">
                    <h5>INTERESTELAR</h5>
                    <p class="text-justify">Narra las aventuras de un grupo de exploradores que
                        hacen uso de un agujero de gusano recientemente
                        descubierto para superar las limitaciones de los
                        viajes espaciales tripulados y vencer las inmensas
                        distancias que tiene un viaje interestelar.</p>
                    <div class="row">
                        <button type="button" class="btn btn-danger mr-3"><i class="fas fa-play"></i>
                            Reproducir</button>
                        <button type="button" class="btn btn-info ml-3"><i class="fas fa-info-circle"></i> Más
                            Información</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src={{ asset('img/son_como_niños.jpg')}} class="d-block w-100" height="625px" alt="...">
                <div class="carousel-caption d-none d-md-block col-4">
                    <h5>SON COMO NIÑOS</h5>
                    <p class="text-justify">Un grupo de amigos y excompañeros descubren
                        que envejecer no siempre significa madurar cuando se reúnen para
                        honrar la memoria de su entrenador de baloncesto.
                        .</p>
                    <div class="row">
                        <button type="button" class="btn btn-danger mr-3"><i class="fas fa-play"></i>
                            Reproducir</button>
                        <button type="button" class="btn btn-info ml-3"><i class="fas fa-info-circle"></i> Más
                            Información</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item carr_3">
                <img src={{ asset('img/chuky.jpg')}} class="d-block w-100" height="625px" alt="...">
                <div class="carousel-caption d-none d-md-block col-4">
                    <h5>CHUCKY</h5>
                    <p class="text-justify">Mediante un ritual de vudú, el alma de un asesino moribundo trasmigra a un
                        muñeco.
                        Una madre compra el muñeco para su hijo, sin saber que está arrojando a sus hijos
                        a los brazos de un ser infernal.</p>
                    <div class="row">
                        <button type="button" class="btn btn-danger mr-3"><i class="fas fa-play"></i>
                            Reproducir</button>
                        <button type="button" class="btn btn-info ml-3"><i class="fas fa-info-circle"></i> Más
                            Información</button>
                    </div>
                </div>
            </div>
    
        </div>
        <a class="carousel-control-prev" href="#SliderVimo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#SliderVimo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="fon_1">
        <div class="bg-light">
            <strong style="color:#ffff" class="letA">Acción</strong>
        </div>
    
    
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="true" data-bs-interval="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/Accion/mortal_kombat.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Mortal Kombat</h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src=" {{ asset('img/Accion/liga_de_la_justicia.jpg') }}" class="card-img-top" height="220px"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">La liga de la justicia</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Accion/Godzilla-vs-Kong.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Godzilla vs Kong</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/Accion/sherlock.jpeg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Sherlock Holmes</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/interestelar.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Interestelar</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Accion/thor.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Thor</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/Accion/spiderman.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Spiderman</h5>                               
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Accion/ironman.jpg')}} class="card-img-top"  height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ironman</h5>
                                
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Accion/hulk.jpg')}} class="card-img-top"  height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Hulk</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <a class="carousel-control-prev" href="#carouselExampleControlsNoTouching" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControlsNoTouching" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
    <div class="fon_1">
        <div class="bg-light">
            <strong style="color:#ffff" class="letA">Terror</strong>
        </div>
    
    
        <div id="carouselTerror" class="carousel slide" data-bs-touch="true" data-bs-interval="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/Terror/It.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">IT</h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Terror/El_conjuro_1.jpg')}} class="card-img-top" height="220px"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">El Conjuro</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Terror/El_conjuro_2.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">El Conjuro 2</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/Terror/El_conjuro_3.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">El Conjuro 3</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Terror/Annabelle.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Annabelle</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Terror/Annabelle_2.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Annabelle 2</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/Terror/El_resplandor.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">El Resplandor</h5>                               
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/chuky.jpg')}} class="card-img-top"  height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Chucky</h5>
                                
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Terror/nosferatu.jpg')}} class="card-img-top"  height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Nosferatu</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <a class="carousel-control-prev" href="#carouselTerror" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTerror" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
    <div class="fon_1">
        <div class="bg-light">
            <strong style="color:#ffff" class="letA">Comedia</strong>
        </div>
    
    
        <div id="carouselComedy" class="carousel slide" data-bs-touch="true" data-bs-interval="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/son_como_niños.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Son como niños</h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Comedia/big_mamma.jpg')}} class="card-img-top" height="220px"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Big Mamma</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Comedia/que_paso_ayer.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">¿Que paso ayer?</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/Comedia/paranormal_movie.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">¿Y donde esta el fantasma?</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Comedia/donde_esta_el_fantasma_2.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">¿Y donde esta el fantasma? 2</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Comedia/scary_movie.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Scary movie</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/Comedia/scar_movie_2.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Scary movie 2</h5>                               
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Comedia/Scary_Movie_3.png')}} class="card-img-top"  height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Scary movie 3</h5>
                                
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/Comedia/scary_movie_4.jpg')}} class="card-img-top"  height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Scary movie 4</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <a class="carousel-control-prev" href="#carouselComedy" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselComedy" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        
    </div>
    
    <div class="fon_1">
        <div class="bg-light">
            <strong style="color:#ffff" class="letA">Series</strong>
        </div>
    
    
        <div id="carouselSeries" class="carousel slide" data-bs-touch="true" data-bs-interval="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/series/comedia/tbbt.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">La teoria del Big Bang </h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/series/suspenso/supernatural.jpg')}} class="card-img-top" height="220px"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Supernatural</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/series/Drama/House.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Dr House</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/series/comedia/frieds.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Friends</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/series/suspenso/bones.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Bones</h5>
    
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/series/Drama/greys_anatomy.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">The Grey's anatomy</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card">
                            <img src={{ asset('img/series/comedia/two_and_a_half_men.jpg')}} class="card-img-top" height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Dos hombres y medio</h5>                               
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/series/suspenso/Csi_las_vegas_.jpg')}} class="card-img-top"  height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">CSI Las Vegas</h5>
                                
                            </div>
                        </div>
                        <div class="card">
                            <img src={{ asset('img/series/Drama/The_Vampire_Diaries.jpg')}} class="card-img-top"  height="220px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Diario de vampiros</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <a class="carousel-control-prev" href="#carouselSeries" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselSeries" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        
    </div>
    
    
    
    <div class=" flex-container mt-3">
    
        <div class=" d-flex justify-content-center align-items-center">
            <i class="icon-red fab fa-facebook fa-3x mr-2"></i>
            <i class="icon-red fab fa-whatsapp fa-3x mr-2"></i>
            <i class="icon-red fab fa-instagram fa-3x mr-2"></i>
            <i class="icon-red fab fa-youtube fa-3x  mr-2"></i>
        </div>
    
    
    </div>
    
    
    <footer class="bg-light p-3 mt-3">
        <p class="text-light w-60 text-center">Todos los derechos reservados &copy;2021</p>
    </footer>


@endsection