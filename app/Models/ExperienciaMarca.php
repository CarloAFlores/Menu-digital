<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ExperienciaMarca
 * 
 * @property int $id_experiencia
 * @property int $id_marca
 * @property int $id
 *
 * @package App\Models
 */
class ExperienciaMarca extends Model
{
	protected $table = 'experiencia_marca';
	public $timestamps = false;

	protected $casts = [
		'id_experiencia' => 'int',
		'id_marca' => 'int'
	];

	protected $fillable = [
		'id_experiencia',
		'id_marca'
	];
}
