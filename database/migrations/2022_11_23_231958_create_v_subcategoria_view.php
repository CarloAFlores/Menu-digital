<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVSubcategoriaView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `v_subcategoria` AS select `a`.`id` AS `id_subcategoria`,`a`.`nombre` AS `nombre_subcategoria`,`a`.`restriccion_sucursal` AS `restriccion_sucursal`,`a`.`restriccion_horario_inicio` AS `restriccion_horario_inicio`,`a`.`restriccion_horario_fin` AS `restriccion_horario_fin`,`a`.`restriccion_region` AS `restriccion_region`,`a`.`disponibilidad_inicio` AS `disponibilidad_inicio`,`a`.`disponibilidad_fin` AS `disponibilidad_fin`,`a`.`activo` AS `activo`,`a`.`prioridad` AS `prioridad`,`a`.`categorias` AS `categorias`,`a`.`imagen_subcategoria` AS `imagen_subcategoria` from `menudigital`.`subcategoria` `a`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `v_subcategoria`");
    }
}
