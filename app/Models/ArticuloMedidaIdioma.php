<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticuloMedidaIdioma
 * 
 * @property int $id
 * @property int $id_articulo
 * @property string $nombre
 * @property float $precio_nacional
 * @property float $precio_acapulco
 * @property float $precio_cc
 * @property float $precio_tijuana
 * @property float $precio_pl
 * @property float $precio_aeropuerto
 * @property int $activo
 * @property int $numero
 * @property string $cantidad_x_porcion_medida
 * @property bool $selected
 * @property int $id_articulo_medida
 * @property int $id_idioma
 * @property int $precio_tezontle
 *
 * @package App\Models
 */
class ArticuloMedidaIdioma extends Model
{
	protected $table = 'articulo_medida_idioma';
	public $timestamps = false;

	protected $casts = [
		'id_articulo' => 'int',
		'precio_nacional' => 'float',
		'precio_acapulco' => 'float',
		'precio_cc' => 'float',
		'precio_tijuana' => 'float',
		'precio_pl' => 'float',
		'precio_aeropuerto' => 'float',
		'activo' => 'int',
		'numero' => 'int',
		'selected' => 'bool',
		'id_articulo_medida' => 'int',
		'id_idioma' => 'int',
		'precio_tezontle' => 'int'
	];

	protected $fillable = [
		'id_articulo',
		'nombre',
		'precio_nacional',
		'precio_acapulco',
		'precio_cc',
		'precio_tijuana',
		'precio_pl',
		'precio_aeropuerto',
		'activo',
		'numero',
		'cantidad_x_porcion_medida',
		'selected',
		'id_articulo_medida',
		'id_idioma',
		'precio_tezontle'
	];
}
