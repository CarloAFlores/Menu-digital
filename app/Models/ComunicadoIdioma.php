<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComunicadoIdioma
 * 
 * @property int $id
 * @property int $id_marca
 * @property string $id_local
 * @property string $ids_regiones
 * @property string $imagen
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property int $activo
 * @property string $tipo_comunicado
 * @property string $link
 * @property int $id_comunicado
 * @property int $id_idioma
 *
 * @package App\Models
 */
class ComunicadoIdioma extends Model
{
	protected $table = 'comunicado_idioma';
	public $timestamps = false;

	protected $casts = [
		'id_marca' => 'int',
		'activo' => 'int',
		'id_comunicado' => 'int',
		'id_idioma' => 'int'
	];

	protected $fillable = [
		'id_marca',
		'id_local',
		'ids_regiones',
		'imagen',
		'fecha_inicio',
		'fecha_fin',
		'activo',
		'tipo_comunicado',
		'link',
		'id_comunicado',
		'id_idioma'
	];
}
