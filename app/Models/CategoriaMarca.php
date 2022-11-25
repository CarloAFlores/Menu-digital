<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaMarca
 * 
 * @property int $id_categoria
 * @property int $id_marca
 * @property int $id
 *
 * @package App\Models
 */
class CategoriaMarca extends Model
{
	protected $table = 'categoria_marca';
	public $timestamps = false;

	protected $casts = [
		'id_categoria' => 'int',
		'id_marca' => 'int'
	];

	protected $fillable = [
		'id_categoria',
		'id_marca'
	];
}
