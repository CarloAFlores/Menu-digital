<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Experiencium
 * 
 * @property int $id
 * @property string $descripcion
 * @property string $nombre
 * @property Carbon|null $registro
 * @property string $ubicacion
 * @property string $imagen
 * @property int|null $activo
 * @property string $imagen_popup
 *
 * @package App\Models
 */
class Experiencium extends Model
{
	protected $table = 'experiencia';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'int'
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
		'imagen_popup'
	];
}
