<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 * 
 * @property int $id
 * @property string|null $nombre
 * @property bool|null $activo
 * @property Carbon|null $registro
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'bool'
	];

	protected $dates = [
		'registro'
	];

	protected $fillable = [
		'nombre',
		'activo',
		'registro'
	];
}
