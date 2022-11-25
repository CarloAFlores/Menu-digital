<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaIdioma
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property int $id_marca
 * @property string $ubicacion
 * @property string $imagen
 * @property int|null $activo
 * @property string $imagen_titulo_categoria
 * @property string $nombre_imagen_titulo_categoria
 * @property string $imagen_fondo
 * @property int $id_categoria
 * @property int $id_idioma
 *
 * @package App\Models
 */
class CategoriaIdioma extends Model
{
	protected $table = 'categoria_idioma';
	public $timestamps = false;

	protected $casts = [
		'id_marca' => 'int',
		'activo' => 'int',
		'id_categoria' => 'int',
		'id_idioma' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'id_marca',
		'ubicacion',
		'imagen',
		'activo',
		'imagen_titulo_categoria',
		'nombre_imagen_titulo_categoria',
		'imagen_fondo',
		'id_categoria',
		'id_idioma'
	];
}
