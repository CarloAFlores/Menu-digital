<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property bool $activo
 * @property int $id_precio
 * @property int|null $id_marca
 *
 * @package App\Models
 */
class Region extends Model
{
	protected $table = 'region';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'bool',
		'id_precio' => 'int',
		'id_marca' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'activo',
		'id_precio',
		'id_marca'
	];
}
