<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVExperienciasXMarcaView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `v_experiencias_x_marca` AS select `b`.`id_experiencia` AS `id_experiencia`,`a`.`nombre` AS `nombre_experiencia`,`a`.`descripcion` AS `descripcion_experiencia`,`a`.`ubicacion` AS `ubicacion`,`b`.`id_marca` AS `id_marca`,`c`.`nombre` AS `nombre_marca`,`a`.`imagen_popup` AS `imagen_popup` from ((`menudigital`.`experiencia` `a` join `menudigital`.`experiencia_marca` `b` on(`a`.`id` = `b`.`id_experiencia`)) join `menudigital`.`marca` `c` on(`b`.`id_marca` = `c`.`id`)) where `a`.`activo` = 11");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `v_experiencias_x_marca`");
    }
}
