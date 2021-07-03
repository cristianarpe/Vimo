@extends('layouts.app')
@section('content')

    <div class="container bg-light col-12 px-3">
        <div class="row bg-light">
            <div class="col-12 text-center">
                <strong style="color:#ffff" class="letA">Series</strong>
            </div>            
        </div>
        <div class="row bg-light">
            <div class="col-12">
                <strong style="color:#ffff" class="letA">Comedia</strong>
            </div>            
        </div>
        <div class="row justify-content pb-2">
            <div class="col">
                <img src="{{ asset('img/series/comedia/tbbt.jpg') }}" class="w-100" height="200px" alt="">
            </div>
            <div class="col">
                <img src={{ asset('img/series/comedia/frieds.jpg') }} class="w-100" height="200px" alt="">
            </div>
            <div class="col">
                <img src={{ asset('img/series/comedia/two_and_a_half_men.jpg') }} class="w-100" height="200px" alt="">
            </div>
        </div>

        <div class="row bg-light">
            <div class="col-12">
                <strong style="color:#ffff" class="letA">Suspenso</strong>
            </div>            
        </div>
        <div class="row justify-content pb-2">
            <div class="col">
                <img src="{{ asset('img/series/suspenso/supernatural.jpg')}}" class="w-100" height="200px" alt="">
            </div>
            <div class="col">
                <img src={{ asset('img/series/suspenso/bones.jpg')}} class="w-100" height="200px" alt="">
            </div>
            <div class="col">
                <img src={{ asset('img/series/suspenso/Csi_las_vegas_.jpg')}} class="w-100" height="200px" alt="">
            </div>
        </div>

        
        <div class="row bg-light">
            <div class="col-12">
                <strong style="color:#ffff" class="letA">Drama</strong>
            </div>            
        </div>
        <div class="row justify-content pb-2">
            <div class="col">
                <img src="{{ asset('img/series/Drama/House.jpg')}}" class="w-100" height="200px" alt="">
            </div>
            <div class="col">
                <img src={{ asset('img/series/Drama/greys_anatomy.jpg')}} class="w-100" height="200px" alt="">
            </div>
            <div class="col">
                <img src={{ asset('img/series/Drama/The_Vampire_Diaries.jpg')}} class="w-100" height="200px" alt="">
            </div>
        </div>

    </div>

@endsection
