<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorium
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property int $id_marca
 * @property string $ubicacion
 * @property string $imagen
 * @property int|null $activo
 * @property string $imagen_titulo_categoria
 * @property string $nombre_imagen_titulo_categoria
 * @property string $imagen_fondo
 * @property int|null $id_categoria
 * @property string|null $nombre_categoria
 * @property string|null $descripcion_categoria
 * @property string|null $imagen_categoria
 * @property string|null $imagen_fondo_categoria
 * @property int|null $active
 * @property string|null $daypart
 * @property string|null $restriccion_sucursal
 * @property string|null $restriccion_horario_inicio
 * @property string|null $restriccion_horario_fin
 * @property string|null $restriccion_region
 * @property string|null $disponibilidad_inicio
 * @property string|null $disponibilidad_fin
 *
 * @package App\Models
 */
class Categorium extends Model
{
	protected $table = 'categoria';
	public $timestamps = false;

	protected $casts = [
		'id_marca' => 'int',
		'activo' => 'int',
		'id_categoria' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'id_marca',
		'ubicacion',
		'imagen',
		'activo',
		'imagen_titulo_categoria',
		'nombre_imagen_titulo_categoria',
		'imagen_fondo',
		'id_categoria',
		'nombre_categoria',
		'descripcion_categoria',
		'imagen_categoria',
		'imagen_fondo_categoria',
		'active',
		'daypart',
		'restriccion_sucursal',
		'restriccion_horario_inicio',
		'restriccion_horario_fin',
		'restriccion_region',
		'disponibilidad_inicio',
		'disponibilidad_fin'
	];
}
