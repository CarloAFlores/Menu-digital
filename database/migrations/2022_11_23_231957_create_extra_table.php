<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 100);
            $table->string('descripcion', 100);
            $table->integer('activo');
            $table->decimal('precio_nacional', 18, 0);
            $table->decimal('precio_acapulco', 18, 0);
            $table->decimal('precio_cc', 18, 0);
            $table->decimal('precio_tijuana', 18, 0);
            $table->decimal('precio_pl', 18, 0);
            $table->decimal('precio_aeropuerto', 18, 0);
            $table->integer('id_articulo');
            $table->tinyInteger('selected')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra');
    }
}
