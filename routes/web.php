<?php
use App\Http\Controllers\InicioUserController;
use App\Http\Controllers\SeriesUserController;
use App\Http\Controllers\PeliculasUserController;
use App\Http\Controllers\TbPeliculasController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); /* esto me lleva a welcome.blade.php */
});

/* Auth::routes();*/
Route::resource('iniciouser', InicioUserController::class);
Route::resource('seriesuser',SeriesUserController::class);
Route::resource('peliculasuser', PeliculasUserController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('administrador/explorar', [TbPeliculasController::class, 'explorar']);  /*el parametro '/explorar es como aparece en el nav. el parametro 'explorar' es el metodo en el controller */
Route::get('administrador/ayuda', [TbPeliculasController::class, 'ayuda']); 
Route::get('administrador/gestionusers', [TbPeliculasController::class, 'adminuser']); 

Route::resource('administrador', TbPeliculasController::class); /* ->middleware('auth') es para pasar con autenticacion */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




