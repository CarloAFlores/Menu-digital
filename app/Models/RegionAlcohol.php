<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegionAlcohol
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property int $activo
 *
 * @package App\Models
 */
class RegionAlcohol extends Model
{
	protected $table = 'region_alcohol';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'activo' => 'int'
	];

	protected $fillable = [
		'id',
		'nombre',
		'descripcion',
		'activo'
	];
}
