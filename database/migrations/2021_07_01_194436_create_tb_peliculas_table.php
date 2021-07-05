<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_pelicula');
            $table->text('reparto');
            $table->float('duracion');
            $table->dateTime('fecha_estreno');
            $table->float('calificacion');
            $table->text('ruta_imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_peliculas');
    }
}
