<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdPosBeerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_pos_beer', function (Blueprint $table) {
            $table->integer('id_pos')->nullable();
            $table->string('sucursal_pos', 16)->nullable();
            $table->integer('id_menu')->nullable();
            $table->string('sucursal_menu', 13)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('id_pos_beer');
    }
}
