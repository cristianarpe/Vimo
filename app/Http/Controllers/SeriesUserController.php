<?php

namespace App\Http\Controllers;

use App\Models\seriesUser;
use Illuminate\Http\Request;

class SeriesUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title_page="Series Disponibles";
        return view('inicio.series', compact('title_page'));

    }/**
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
     * @param  \App\Models\seriesUser  $seriesUser
     * @return \Illuminate\Http\Response
     */
    public function show(seriesUser $seriesUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seriesUser  $seriesUser
     * @return \Illuminate\Http\Response
     */
    public function edit(seriesUser $seriesUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\seriesUser  $seriesUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seriesUser $seriesUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seriesUser  $seriesUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(seriesUser $seriesUser)
    {
        //
    }
}
