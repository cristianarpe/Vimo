<?php

namespace App\Http\Controllers;

use App\Models\tb_peliculas;
use Illuminate\Http\Request;

class TbPeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['administrador'] = tb_peliculas::paginate(5);
        return view('administrador.indexadmin', $datos);
    }

    public function explorar(){
        $datos['administrador'] = tb_peliculas::paginate(5);
        return view('administrador.explorar', $datos);
    }

    public function ayuda(){
       return view('administrador.ayuda');
    }

    public function adminuser(){
        return view('administrador.gestionusers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos_peliculas = request()->except("_token");

        $campos_form = [
            'nombre_pelicula'=>'required|string|max:100',
            'reparto'=>'required|string',
            'duracion'=>'required|numeric',
            'fecha_estreno'=>'required|date',
            'calificacion'=>'required|numeric',
            'ruta_imagen'=>'required|max:10000|mimes:jpg,jpeg,png'
        ];

        $mensajes=[
            'required'=>'El campo :attribute se requiere para continuar',
            'ruta_imagen.required'=>'Debe seleccionar la imagen que representará a la pelicula'
        ];

        $this->validate($request, $campos_form, $mensajes);

        if($request->hasFile('ruta_imagen')){
            $datos_peliculas['ruta_imagen'] = $request->file('ruta_imagen')->store('uploads', 'public');
        }


        tb_peliculas::insert($datos_peliculas);
        return redirect('peliculas')->with('alerta', 'Se guardo la informacion correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_peliculas  $tb_peliculas
     * @return \Illuminate\Http\Response
     */
    public function show(tb_peliculas $tb_peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_peliculas  $tb_peliculas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_peli = tb_peliculas::findOrFail($id);
        return view('administrador.editar', compact('data_peli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_peliculas  $tb_peliculas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data_update = request()->except("_token", "_method");

        $campos = [
            'nombre_pelicula'=>'required|string|max:100',
            'reparto'=>'required|string',
            'duracion'=>'required|numeric',
            'fecha_estreno'=>'required|date',
            'calificacion'=>'required|numeric',
            'ruta_imagen'=>'required|max:10000|mimes:jpg,jpeg,png'
        ];
        $mensajes=[
            'required'=>'El campo :attribute es obligatorio',
            'ruta_imagen.required'=>'Debe seleccionar una imagen para continuar'
        ];

        if($request->hasFile('ruta_imagen')){
            $campos = [
                'ruta_imagen'=>'required|max:10000|mimes:jpg,jpeg,png'
            ];
            $mensajes = [
                'ruta_imagen.required'=>'La imagen es obligatoria, agregue una'
            ];
        }

        $this->validate($request, $campos, $mensajes);


        if($request->hasFile('ruta_imagen')){
            $actualizar = tb_peliculas::findOrFail($id);
            Storage::delete('public/'.$actualizar->ruta_imagen);

            $data_update['ruta_imagen'] = $request->file('ruta_imagen')->store('uploads', 'public');
        }

        tb_peliculas::where('id', '=', $id)->update($data_update);
        return redirect('administrador')->with('alerta', 'Se actualizo CORRECTAMENTE :D');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_peliculas  $tb_peliculas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_peli = tb_peliculas::findOrFail($id);
        if(Storage::delete('public/'.$data_peli->ruta_imagen)){
            tb_peliculas::destroy($id);
        }
        return redirect('administrador');
    }
    
}
