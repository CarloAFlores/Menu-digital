<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExperienciaIdioma
 * 
 * @property int $id
 * @property string $descripcion
 * @property string $nombre
 * @property Carbon|null $registro
 * @property string $ubicacion
 * @property string $imagen
 * @property int|null $activo
 * @property string $imagen_popup
 * @property int $id_experiencia
 * @property int $id_idioma
 *
 * @package App\Models
 */
class ExperienciaIdioma extends Model
{
	protected $table = 'experiencia_idioma';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'int',
		'id_experiencia' => 'int',
		'id_idioma' => 'int'
	];

	protected $dates = [
		'registro'
	];

	protected $fillable = [
		'descripcion',
		'nombre',
		'registro',
		'ubicacion',
		'imagen',
		'activo',
		'imagen_popup',
		'id_experiencia',
		'id_idioma'
	];
}
