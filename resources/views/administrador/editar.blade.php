@extends('layouts.appadmin')
@section('content')
<h1 class="display-4">Actualizar el registro de la pelicula</h1>
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">   
<form action="{{ url('/administrador/'.$data_peli->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('administrador.form')
</form>
@endsection