<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaIdiomaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_idioma', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 50)->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('id_marca');
            $table->string('ubicacion');
            $table->string('imagen');
            $table->integer('activo')->nullable();
            $table->string('imagen_titulo_categoria');
            $table->string('nombre_imagen_titulo_categoria', 100);
            $table->string('imagen_fondo', 250);
            $table->integer('id_categoria');
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
        Schema::dropIfExists('categoria_idioma');
    }
}
