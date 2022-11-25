<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVSucursalesEstadosView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `v_sucursales_estados` AS select `a`.`id` AS `id_sucursal`,`a`.`nombre` AS `nombre_sucursal`,`a`.`id_estado` AS `id_estado`,`b`.`nombre` AS `nombre_estado`,`b`.`abrev` AS `abrev`,`a`.`latitud` AS `latitud`,`a`.`longitud` AS `longitud`,`a`.`id_marca` AS `id_marca` from (`menudigital`.`sucursal` `a` join `menudigital`.`estados` `b` on(`a`.`id_estado` = `b`.`id`)) where `a`.`activo` = 11");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `v_sucursales_estados`");
    }
}
