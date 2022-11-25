<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VExperienciasXMarca
 * 
 * @property int $id_experiencia
 * @property string $nombre_experiencia
 * @property string $descripcion_experiencia
 * @property string $ubicacion
 * @property int $id_marca
 * @property string $nombre_marca
 * @property string $imagen_popup
 *
 * @package App\Models
 */
class VExperienciasXMarca extends Model
{
	protected $table = 'v_experiencias_x_marca';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_experiencia' => 'int',
		'id_marca' => 'int'
	];

	protected $fillable = [
		'id_experiencia',
		'nombre_experiencia',
		'descripcion_experiencia',
		'ubicacion',
		'id_marca',
		'nombre_marca',
		'imagen_popup'
	];
}
