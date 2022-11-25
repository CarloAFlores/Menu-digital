<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VCategorium
 * 
 * @property int $id_categoria
 * @property string|null $nombre_categoria
 * @property string|null $restriccion_sucursal
 * @property string|null $restriccion_horario_inicio
 * @property string|null $restriccion_horario_fin
 * @property string|null $restriccion_region
 * @property string|null $disponibilidad_inicio
 * @property string|null $disponibilidad_fin
 * @property int|null $activo
 * @property string|null $imagen_categoria
 *
 * @package App\Models
 */
class VCategorium extends Model
{
	protected $table = 'v_categoria';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_categoria' => 'int',
		'activo' => 'int'
	];

	protected $fillable = [
		'id_categoria',
		'nombre_categoria',
		'restriccion_sucursal',
		'restriccion_horario_inicio',
		'restriccion_horario_fin',
		'restriccion_region',
		'disponibilidad_inicio',
		'disponibilidad_fin',
		'activo',
		'imagen_categoria'
	];
}
