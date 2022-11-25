<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comunicado
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
 *
 * @package App\Models
 */
class Comunicado extends Model
{
	protected $table = 'comunicado';
	public $timestamps = false;

	protected $casts = [
		'id_marca' => 'int',
		'activo' => 'int'
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
		'link'
	];
}
