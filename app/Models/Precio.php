<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Precio
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 *
 * @package App\Models
 */
class Precio extends Model
{
	protected $table = 'precios';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descripcion'
	];
}
