<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('descripcion');
            $table->string('nombre', 50);
            $table->dateTime('registro')->nullable();
            $table->string('ubicacion');
            $table->string('imagen');
            $table->integer('activo')->nullable();
            $table->string('imagen_popup', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiencia');
    }
}
