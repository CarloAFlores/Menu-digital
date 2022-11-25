<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VSubcategorium
 * 
 * @property int $id_subcategoria
 * @property string $nombre_subcategoria
 * @property string|null $restriccion_sucursal
 * @property string|null $restriccion_horario_inicio
 * @property string|null $restriccion_horario_fin
 * @property string|null $restriccion_region
 * @property string|null $disponibilidad_inicio
 * @property string|null $disponibilidad_fin
 * @property int|null $activo
 * @property string|null $prioridad
 * @property string $categorias
 * @property string|null $imagen_subcategoria
 *
 * @package App\Models
 */
class VSubcategorium extends Model
{
	protected $table = 'v_subcategoria';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_subcategoria' => 'int',
		'activo' => 'int'
	];

	protected $fillable = [
		'id_subcategoria',
		'nombre_subcategoria',
		'restriccion_sucursal',
		'restriccion_horario_inicio',
		'restriccion_horario_fin',
		'restriccion_region',
		'disponibilidad_inicio',
		'disponibilidad_fin',
		'activo',
		'prioridad',
		'categorias',
		'imagen_subcategoria'
	];
}
