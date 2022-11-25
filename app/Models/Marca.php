<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 * 
 * @property int $id
 * @property string $nombre
 * @property Carbon|null $registro
 * @property string $ubicacion
 * @property string $imagen
 * @property int|null $activo
 * @property string $url
 *
 * @package App\Models
 */
class Marca extends Model
{
	protected $table = 'marca';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'int'
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
		'url'
	];
}
