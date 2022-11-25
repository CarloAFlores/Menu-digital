<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriaIdiomaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategoria_idioma', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 50);
            $table->dateTime('registro')->nullable();
            $table->string('ubicacion');
            $table->string('imagen');
            $table->integer('activo')->nullable();
            $table->integer('id_categoria');
            $table->string('descripcion');
            $table->string('categorias', 100);
            $table->string('regiones', 100)->default('0');
            $table->integer('destacado')->default(0);
            $table->integer('id_subcategoria');
            $table->integer('id_idioma');
            $table->string('color_pleca', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategoria_idioma');
    }
}
