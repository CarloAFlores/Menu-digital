<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
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
            $table->integer('id_categoria')->nullable();
            $table->string('nombre_categoria', 200)->nullable()->default('');
            $table->string('descripcion_categoria', 200)->nullable()->default('');
            $table->string('imagen_categoria', 200)->nullable()->default('');
            $table->string('imagen_fondo_categoria', 200)->nullable()->default('');
            $table->integer('active')->nullable();
            $table->string('daypart', 200)->nullable()->default('');
            $table->string('restriccion_sucursal', 200)->nullable()->default('');
            $table->string('restriccion_horario_inicio', 200)->nullable()->default('');
            $table->string('restriccion_horario_fin', 200)->nullable()->default('');
            $table->string('restriccion_region', 200)->nullable()->default('');
            $table->string('disponibilidad_inicio', 200)->nullable()->default('');
            $table->string('disponibilidad_fin', 200)->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria');
    }
}
