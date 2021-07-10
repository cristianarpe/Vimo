<?php

namespace App\Http\Controllers;

use App\Models\inicioUser;
use Illuminate\Http\Request;

class InicioUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title_page="¡Bienvenido!";
        return view('inicio.iniciousuario', compact('title_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inicioUser  $inicioUser
     * @return \Illuminate\Http\Response
     */
    public function show(inicioUser $inicioUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inicioUser  $inicioUser
     * @return \Illuminate\Http\Response
     */
    public function edit(inicioUser $inicioUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inicioUser  $inicioUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inicioUser $inicioUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inicioUser  $inicioUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(inicioUser $inicioUser)
    {
        //
    }
}
