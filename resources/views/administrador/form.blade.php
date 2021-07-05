@csrf
<div class="contenido">
<br>
<div class="container">
<div class="row">
<div class="form-group col-md-4">
<label for="nombre_pelicula" ><strong> Nombre Pelicula: </strong></label> 
<input type="text" class="form-control" name="nombre_pelicula" id="nombre_pelicula" placeholder="Pelicula" value="{{ isset($data_peli->nombre_pelicula) ? $data_peli->nombre_pelicula : old('nombre_pelicula') }}">
</div>

<br>

<div class="form-group col-md-4">
<label for="reparto"><strong> Actores/Reparto </strong></label>
{{-- <textarea cols="30"  rows="1" name="reparto" id="reparto" value="{{ isset($data_peli->reparto) ? $data_peli->reparto : old('reparto') }}"></textarea>  --}}
<input type="text" class="form-control" name="reparto" id="reparto" value="{{ isset($data_peli->reparto) ? $data_peli->reparto : old('reparto') }}">
 </div>

<br>

<div class="form-group col-md-4">
<label for="duracion"><strong> Duracion </strong></label>
<input type="number" class="form-control" name="duracion" id="duracion" value="{{ isset($data_peli->duracion) ? $data_peli->duracion : old('duracion') }}">
</div>

<br>

<div class="form-group col-md-4">
<label for="fecha_estreno"><strong> Fecha Estreno </strong></label>
<input type="date" class="form-control" name="fecha_estreno" id="fecha_estreno" value="{{ isset($data_peli->fecha_estreno) ? $data_peli->fecha_estreno : old('fecha_estreno') }}">
</div>
<br>

<div class="form-group col-md-4">
<label for="calificacion"> <strong> Calificacion </strong></label>
<input type="number" class="form-control" name="calificacion" id="calificacion" value="{{ isset($data_peli->calificacion) ? $data_peli->calificacion : old('calificacion') }}">
</div>
<br>

<div class="form-group col-md-4">
<label for="ruta_imagen"><strong> Imagen:   </strong></label>
@if ( isset($data_peli->ruta_imagen))
<img src="{{ asset('storage').'/'.$data_peli->ruta_imagen }}" class="w-50" alt="">    
@endif
<input type="file"  class="form-control-file" name="ruta_imagen" id="ruta_imagen">
</div>
<br>

<div class="form-group col-md-4 my-4">
<button type="submit" class="btn btn-success ">Guardar Pelicula</button>
<a href="{{ url('administrador/') }}" class="btn btn-info">Atras</a>
</div>
</div>
</div>
</div>
