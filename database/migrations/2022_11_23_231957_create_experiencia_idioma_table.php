<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaIdiomaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_idioma', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('descripcion');
            $table->string('nombre', 50);
            $table->dateTime('registro')->nullable();
            $table->string('ubicacion');
            $table->string('imagen');
            $table->integer('activo')->nullable();
            $table->string('imagen_popup', 250);
            $table->integer('id_experiencia');
            $table->integer('id_idioma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiencia_idioma');
    }
}
