<?php

namespace App\Http\Controllers;

use App\Models\peliculasUser;
use Illuminate\Http\Request;

class PeliculasUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title_page="Peliculas Disponibles";
        return view('inicio.peliculas', compact('title_page'));
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
     * @param  \App\Models\peliculasUser  $peliculasUser
     * @return \Illuminate\Http\Response
     */
    public function show(peliculasUser $peliculasUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peliculasUser  $peliculasUser
     * @return \Illuminate\Http\Response
     */
    public function edit(peliculasUser $peliculasUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peliculasUser  $peliculasUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peliculasUser $peliculasUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peliculasUser  $peliculasUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(peliculasUser $peliculasUser)
    {
        //
    }
}
