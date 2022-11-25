<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Idioma
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property int $activo
 *
 * @package App\Models
 */
class Idioma extends Model
{
	protected $table = 'idioma';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'activo'
	];
}
