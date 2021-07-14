<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title_page="Inicio";
        return view('home', compact('title_page'));
    }
    public function homeseries(){
        $title_page="Series";
        return view('home.homeseries', compact('title_page'));
    }
    public function homepeliculas(){
        $title_page="peliculas";
        return view('home.homepeliculas', compact('title_page'));
    }
}
