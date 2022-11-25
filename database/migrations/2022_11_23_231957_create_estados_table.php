<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->integer('id');
            $table->string('clave', 2)->comment('CVE_ENT - Clave de la entidad');
            $table->string('nombre', 40)->comment('NOM_ENT - Nombre de la entidad');
            $table->string('abrev', 10)->comment('NOM_ABR - Nombre abreviado de la entidad');
            $table->boolean('activo')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
