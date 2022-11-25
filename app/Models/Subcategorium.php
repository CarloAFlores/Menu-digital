<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subcategorium
 * 
 * @property int $id
 * @property string $nombre
 * @property Carbon|null $registro
 * @property string $ubicacion
 * @property string $imagen
 * @property int|null $activo
 * @property int $id_categoria
 * @property string $descripcion
 * @property string $categorias
 * @property string $regiones
 * @property int $destacado
 * @property string $color_pleca
 * @property int $orden_vista
 * @property string|null $extra
 * @property string|null $prioridad
 * @property string|null $restriccion_sucursal
 * @property string|null $imagen_subcategoria
 * @property int|null $id_subcategoria
 * @property string|null $disponibilidad_fin
 * @property string|null $disponibilidad_inicio
 * @property string|null $restriccion_region
 * @property string|null $restriccion_horario_fin
 * @property string|null $restriccion_horario_inicio
 * @property string|null $descripcion_subcategoria
 * @property string|null $nombre_subcategoria
 *
 * @package App\Models
 */
class Subcategorium extends Model
{
	protected $table = 'subcategoria';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'int',
		'id_categoria' => 'int',
		'destacado' => 'int',
		'orden_vista' => 'int',
		'id_subcategoria' => 'int'
	];

	protected $dates = [
		'registro'
	];

	protected $fillable = [
		'nombre',
		'registro',
		'ubicacion',
		'imagen',
		'activo',
		'id_categoria',
		'descripcion',
		'categorias',
		'regiones',
		'destacado',
		'color_pleca',
		'orden_vista',
		'extra',
		'prioridad',
		'restriccion_sucursal',
		'imagen_subcategoria',
		'id_subcategoria',
		'disponibilidad_fin',
		'disponibilidad_inicio',
		'restriccion_region',
		'restriccion_horario_fin',
		'restriccion_horario_inicio',
		'descripcion_subcategoria',
		'nombre_subcategoria'
	];
}
