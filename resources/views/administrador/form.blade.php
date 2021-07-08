@csrf
<div class="contenido">
    <br>
    <div class="container">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nombre_pelicula"><strong><i class="icon ion-md-pricetags"></i> Nombre Pelicula: </strong></label>
                <input type="text" class="form-control" name="nombre_pelicula" id="nombre_pelicula"
                    placeholder="Ingrese el Nombre de la pelicula"
                    value="{{ isset($data_peli->nombre_pelicula) ? $data_peli->nombre_pelicula : old('nombre_pelicula') }}">
            </div>
            <br>
            <div class="form-group col-md-4">
                <label for="reparto"><strong><i class="icon ion-md-contacts"></i> Actores/Reparto </strong></label>
                <input type="text" class="form-control" name="reparto" id="reparto" placeholder="Actor(es)"
                    value="{{ isset($data_peli->reparto) ? $data_peli->reparto : old('reparto') }}">
            </div>
            <br>
            <div class="form-group col-md-4">
                <label for="duracion"><strong><i class="icon ion-md-time"></i> Duración </strong></label>
                <input type="number" class="form-control" name="duracion" id="duracion"
                    value="{{ isset($data_peli->duracion) ? $data_peli->duracion : old('duracion') }}">
            </div>
            <br>
            <div class="form-group col-md-4">
                <label for="fecha_estreno"><strong><i class="icon ion-md-calendar"></i> Fecha Estreno </strong></label>
                <input type="date" class="form-control" name="fecha_estreno" id="fecha_estreno"
                    value="{{ isset($data_peli->fecha_estreno) ? $data_peli->fecha_estreno : old('fecha_estreno') }}">
            </div>
            <br>

            <div class="form-group col-md-4">
                <label for="calificacion"> <strong><i class="icon ion-md-checkbox"></i> Calificación </strong></label>
                <input type="number" class="form-control" name="calificacion" id="calificacion" min="1" max="5"
                    value="{{ isset($data_peli->calificacion) ? $data_peli->calificacion : old('calificacion') }}">
            </div>
            <br>

            <div class="form-group col-md-4">
                <label for="genero"> <strong><i class="icon ion-md-transgender"></i> Género </strong></label>
                <select id="genero" name="genero" class="form-control">
                    <option disabled selected value="">Seleccione uno...</option>
                   {{-- @foreach ($administrador as $peli) --}}
                   <option value="">Terror</option>
                   <option value="">Comedia</option>
                   <option value="">Accion</option>
                   {{-- @endforeach --}}
                </select>
            </div>
            <br>

            <div class="form-group col-md-4">
                <label for="formato"> <strong><i class="icon ion-md-videocam"></i> Formato </strong></label>
                <select id="formato" name="formato" class="form-control">
                    <option disabled selected value="">Seleccione uno...</option>
                   {{-- @foreach ($administrador as $peli) --}}
                   <option value="">1024x720</option>
                   <option value="">Full HD</option>
                   <option value="">4K</option>
                 {{--   @endforeach --}}
                </select>
            </div>
            <br>

            <div class="form-group col-md-4">
                <label for="ruta_imagen"><strong><i class="icon ion-md-photos"></i> Portada: </strong></label>
                @if (isset($data_peli->ruta_imagen))
                    <img src="{{ asset('storage') . '/' . $data_peli->ruta_imagen }}" class="w-50" alt="">
                @endif
                <input type="file" class="form-control-file" name="ruta_imagen" id="ruta_imagen">
            </div>
            <br>

            <div class="form-group col-md-4">
                <label for="ruta_pelicula"><strong><i class="icon ion-md-film"></i> Archivo: </strong></label>
                {{-- @if (isset($data_peli->ruta_imagen))
                    <img src="{{ asset('storage') . '/' . $data_peli->ruta_imagen }}" class="w-50" alt="">
                @endif --}}
                <input type="file" class="form-control-file" name="ruta_pelicula" id="ruta_pelicula">
            </div>
            <br>

            <div class="form-group col-md-4 my-4">
                <button type="submit" class="btn btn-success "><i class="icon ion-md-save" style="font-size: 18px"></i> Guardar Pelicula</button>
                <a href="{{ url('administrador/') }}" class="btn btn-dark"><i class="icon ion-md-backspace" style="font-size: 18px"></i> Atras</a>
            </div>
        </div>
    </div>
</div>
