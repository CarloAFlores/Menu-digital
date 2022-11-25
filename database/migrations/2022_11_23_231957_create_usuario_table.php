<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 50);
            $table->string('usuario', 50)->nullable();
            $table->string('contrasenha', 50)->nullable();
            $table->string('correo', 50)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->integer('id_rol');
            $table->integer('id_marca');
            $table->string('token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
