@extends('layouts.appadmin')
@section('content')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <h1 class="container display-4">Crea el Registro para la Pelicula</h1>
    <br>

    <form action="{{ url('/administrador') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('administrador.form')
    </form>
@endsection
