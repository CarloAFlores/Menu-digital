<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticuloIdioma
 * 
 * @property int $id
 * @property string|null $platillo
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property string|null $simbologia
 * @property string|null $imagen
 * @property string $logo
 * @property int|null $id_categoria
 * @property int $id_subcategoria
 * @property string $id_experiencia
 * @property string $ubicacion
 * @property int $activo
 * @property float $precio_nacional
 * @property float $precio_acapulco
 * @property float $precio_cc
 * @property float $precio_tijuana
 * @property float $precio_pl
 * @property float $precio_aeropuerto
 * @property float $precio_tezontle
 * @property string $cantidad_x_porcion
 * @property string $categorias
 * @property int $orden
 * @property string $descripcion_imagen
 * @property string $detalle_imagen
 * @property string $nombre_detalle_imagen
 * @property string $extra
 * @property string $imagen_min
 * @property string $etiqueta_extra
 * @property int $numero_opciones
 * @property int $vigencia
 * @property string $fechainicio
 * @property string $fechafin
 * @property int $id_articulo
 * @property int $id_idioma
 *
 * @package App\Models
 */
class ArticuloIdioma extends Model
{
	protected $table = 'articulo_idioma';
	public $timestamps = false;

	protected $casts = [
		'id_categoria' => 'int',
		'id_subcategoria' => 'int',
		'activo' => 'int',
		'precio_nacional' => 'float',
		'precio_acapulco' => 'float',
		'precio_cc' => 'float',
		'precio_tijuana' => 'float',
		'precio_pl' => 'float',
		'precio_aeropuerto' => 'float',
		'precio_tezontle' => 'float',
		'orden' => 'int',
		'numero_opciones' => 'int',
		'vigencia' => 'int',
		'id_articulo' => 'int',
		'id_idioma' => 'int'
	];

	protected $fillable = [
		'platillo',
		'nombre',
		'descripcion',
		'simbologia',
		'imagen',
		'logo',
		'id_categoria',
		'id_subcategoria',
		'id_experiencia',
		'ubicacion',
		'activo',
		'precio_nacional',
		'precio_acapulco',
		'precio_cc',
		'precio_tijuana',
		'precio_pl',
		'precio_aeropuerto',
		'precio_tezontle',
		'cantidad_x_porcion',
		'categorias',
		'orden',
		'descripcion_imagen',
		'detalle_imagen',
		'nombre_detalle_imagen',
		'extra',
		'imagen_min',
		'etiqueta_extra',
		'numero_opciones',
		'vigencia',
		'fechainicio',
		'fechafin',
		'id_articulo',
		'id_idioma'
	];
}
