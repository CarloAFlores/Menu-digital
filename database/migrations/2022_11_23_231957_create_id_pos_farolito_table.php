<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdPosFarolitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_pos_farolito', function (Blueprint $table) {
            $table->integer('id_pos')->nullable();
            $table->string('sucursal_pos', 16)->nullable();
            $table->integer('id_menu')->nullable();
            $table->string('sucursal_menu', 12)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('id_pos_farolito');
    }
}
