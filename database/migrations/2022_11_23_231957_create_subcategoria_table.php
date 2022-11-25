<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategoria', function (Blueprint $table) {
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
            $table->string('color_pleca', 50);
            $table->integer('orden_vista')->default(0);
            $table->string('extra', 200)->nullable()->default('');
            $table->string('prioridad', 200)->nullable()->default('');
            $table->string('restriccion_sucursal', 200)->nullable()->default('');
            $table->string('imagen_subcategoria', 200)->nullable()->default('');
            $table->integer('id_subcategoria')->nullable();
            $table->string('disponibilidad_fin', 200)->nullable()->default('');
            $table->string('disponibilidad_inicio', 200)->nullable()->default('');
            $table->string('restriccion_region', 200)->nullable()->default('');
            $table->string('restriccion_horario_fin', 200)->nullable()->default('');
            $table->string('restriccion_horario_inicio', 200)->nullable()->default('');
            $table->string('descripcion_subcategoria', 200)->nullable()->default('');
            $table->string('nombre_subcategoria', 200)->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategoria');
    }
}
