<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 * 
 * @property int $id
 * @property string $clave
 * @property string $nombre
 * @property string $abrev
 * @property bool $activo
 *
 * @package App\Models
 */
class Estado extends Model
{
	protected $table = 'estados';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'activo' => 'bool'
	];

	protected $fillable = [
		'id',
		'clave',
		'nombre',
		'abrev',
		'activo'
	];
}
