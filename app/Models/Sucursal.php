<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sucursal
 * 
 * @property int $id
 * @property string|null $nombre
 * @property Carbon|null $registro
 * @property string|null $latitud
 * @property string|null $longitud
 * @property int|null $id_region
 * @property int|null $id_marca
 * @property int|null $activo
 * @property int $id_estado
 * @property int $alcohol
 * @property int $individual
 * @property int $kilos
 * @property int|null $id_pos
 *
 * @package App\Models
 */
class Sucursal extends Model
{
	protected $table = 'sucursal';
	public $timestamps = false;

	protected $casts = [
		'id_region' => 'int',
		'id_marca' => 'int',
		'activo' => 'int',
		'id_estado' => 'int',
		'alcohol' => 'int',
		'individual' => 'int',
		'kilos' => 'int',
		'id_pos' => 'int'
	];

	protected $dates = [
		'registro'
	];

	protected $fillable = [
		'nombre',
		'registro',
		'latitud',
		'longitud',
		'id_region',
		'id_marca',
		'activo',
		'id_estado',
		'alcohol',
		'individual',
		'kilos',
		'id_pos'
	];
}
