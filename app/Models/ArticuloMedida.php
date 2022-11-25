<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticuloMedida
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
 * @property float $precio_tezontle
 * @property int $activo
 * @property int $numero
 * @property string $cantidad_x_porcion_medida
 * @property bool $selected
 *
 * @package App\Models
 */
class ArticuloMedida extends Model
{
	protected $table = 'articulo_medida';
	public $timestamps = false;

	protected $casts = [
		'id_articulo' => 'int',
		'precio_nacional' => 'float',
		'precio_acapulco' => 'float',
		'precio_cc' => 'float',
		'precio_tijuana' => 'float',
		'precio_pl' => 'float',
		'precio_aeropuerto' => 'float',
		'precio_tezontle' => 'float',
		'activo' => 'int',
		'numero' => 'int',
		'selected' => 'bool'
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
		'precio_tezontle',
		'activo',
		'numero',
		'cantidad_x_porcion_medida',
		'selected'
	];
}
