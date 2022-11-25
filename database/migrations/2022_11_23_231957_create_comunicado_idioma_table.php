<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunicadoIdiomaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunicado_idioma', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_marca');
            $table->string('id_local', 50);
            $table->string('ids_regiones', 50);
            $table->string('imagen', 250);
            $table->string('fecha_inicio', 15);
            $table->string('fecha_fin', 15);
            $table->integer('activo');
            $table->string('tipo_comunicado', 20)->comment('1 general
2 unidad
3 unidades
4 regiones');
            $table->string('link', 250);
            $table->integer('id_comunicado');
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
        Schema::dropIfExists('comunicado_idioma');
    }
}
