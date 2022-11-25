<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('platillo', 100)->nullable();
            $table->string('nombre')->nullable();
            $table->string('descripcion', 500)->nullable();
            $table->string('simbologia', 1000)->nullable();
            $table->string('imagen')->nullable();
            $table->string('logo');
            $table->integer('id_categoria')->nullable();
            $table->integer('id_subcategoria');
            $table->string('id_experiencia', 50);
            $table->string('ubicacion');
            $table->integer('activo');
            $table->decimal('precio_nacional', 18, 3);
            $table->decimal('precio_acapulco', 18, 3);
            $table->decimal('precio_cc', 18, 3);
            $table->decimal('precio_tijuana', 18, 3);
            $table->decimal('precio_pl', 18, 3);
            $table->decimal('precio_aeropuerto', 18, 3)->default(0);
            $table->decimal('precio_tezontle', 10, 0);
            $table->string('cantidad_x_porcion', 50);
            $table->string('categorias', 10);
            $table->integer('orden');
            $table->string('descripcion_imagen');
            $table->string('detalle_imagen');
            $table->string('nombre_detalle_imagen');
            $table->string('extra', 50);
            $table->string('imagen_min')->default('');
            $table->string('etiqueta_extra', 20);
            $table->integer('numero_opciones')->default(0);
            $table->integer('vigencia');
            $table->string('fechainicio', 15);
            $table->string('fechafin', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo');
    }
}
