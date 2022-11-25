<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursal', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 50)->nullable();
            $table->dateTime('registro')->nullable();
            $table->string('latitud', 50)->nullable();
            $table->string('longitud', 50)->nullable();
            $table->integer('id_region')->nullable();
            $table->integer('id_marca')->nullable();
            $table->integer('activo')->nullable();
            $table->integer('id_estado');
            $table->integer('alcohol');
            $table->integer('individual')->default(0);
            $table->integer('kilos')->default(0);
            $table->integer('id_pos')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursal');
    }
}
