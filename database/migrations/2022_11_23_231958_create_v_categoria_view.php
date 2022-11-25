<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVCategoriaView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `v_categoria` AS select `a`.`id` AS `id_categoria`,`a`.`nombre` AS `nombre_categoria`,`a`.`restriccion_sucursal` AS `restriccion_sucursal`,`a`.`restriccion_horario_inicio` AS `restriccion_horario_inicio`,`a`.`restriccion_horario_fin` AS `restriccion_horario_fin`,`a`.`restriccion_region` AS `restriccion_region`,`a`.`disponibilidad_inicio` AS `disponibilidad_inicio`,`a`.`disponibilidad_fin` AS `disponibilidad_fin`,`a`.`activo` AS `activo`,`a`.`imagen_categoria` AS `imagen_categoria` from `menudigital`.`categoria` `a`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `v_categoria`");
    }
}
