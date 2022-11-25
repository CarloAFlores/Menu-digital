<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubcategoriaIdioma
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
 * @property int $id_subcategoria
 * @property int $id_idioma
 * @property string $color_pleca
 *
 * @package App\Models
 */
class SubcategoriaIdioma extends Model
{
	protected $table = 'subcategoria_idioma';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'int',
		'id_categoria' => 'int',
		'destacado' => 'int',
		'id_subcategoria' => 'int',
		'id_idioma' => 'int'
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
		'id_subcategoria',
		'id_idioma',
		'color_pleca'
	];
}
