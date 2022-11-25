<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ExtraIdioma
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property int $activo
 * @property float $precio_nacional
 * @property float $precio_acapulco
 * @property float $precio_cc
 * @property float $precio_tijuana
 * @property float $precio_pl
 * @property float $precio_aeropuerto
 * @property int $id_articulo
 * @property int $selected
 * @property int $id_extra
 * @property int $id_idioma
 *
 * @package App\Models
 */
class ExtraIdioma extends Model
{
	protected $table = 'extra_idioma';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'int',
		'precio_nacional' => 'float',
		'precio_acapulco' => 'float',
		'precio_cc' => 'float',
		'precio_tijuana' => 'float',
		'precio_pl' => 'float',
		'precio_aeropuerto' => 'float',
		'id_articulo' => 'int',
		'selected' => 'int',
		'id_extra' => 'int',
		'id_idioma' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'activo',
		'precio_nacional',
		'precio_acapulco',
		'precio_cc',
		'precio_tijuana',
		'precio_pl',
		'precio_aeropuerto',
		'id_articulo',
		'selected',
		'id_extra',
		'id_idioma'
	];
}
