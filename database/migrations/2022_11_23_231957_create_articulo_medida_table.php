<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloMedidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_medida', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_articulo');
            $table->string('nombre');
            $table->decimal('precio_nacional', 18, 3)->default(0);
            $table->decimal('precio_acapulco', 18, 3)->default(0);
            $table->decimal('precio_cc', 18, 3)->default(0);
            $table->decimal('precio_tijuana', 18, 3)->default(0);
            $table->decimal('precio_pl', 18, 3)->default(0);
            $table->decimal('precio_aeropuerto', 18, 3)->default(0);
            $table->decimal('precio_tezontle', 10, 0);
            $table->integer('activo')->default(1);
            $table->integer('numero');
            $table->string('cantidad_x_porcion_medida', 100);
            $table->boolean('selected')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo_medida');
    }
}
