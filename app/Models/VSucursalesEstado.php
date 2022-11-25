<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VSucursalesEstado
 * 
 * @property int $id_sucursal
 * @property string|null $nombre_sucursal
 * @property int $id_estado
 * @property string $nombre_estado
 * @property string $abrev
 * @property string|null $latitud
 * @property string|null $longitud
 * @property int|null $id_marca
 *
 * @package App\Models
 */
class VSucursalesEstado extends Model
{
	protected $table = 'v_sucursales_estados';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_sucursal' => 'int',
		'id_estado' => 'int',
		'id_marca' => 'int'
	];

	protected $fillable = [
		'id_sucursal',
		'nombre_sucursal',
		'id_estado',
		'nombre_estado',
		'abrev',
		'latitud',
		'longitud',
		'id_marca'
	];
}
