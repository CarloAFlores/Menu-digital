<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IdPosFarolito
 * 
 * @property int|null $id_pos
 * @property string|null $sucursal_pos
 * @property int|null $id_menu
 * @property string|null $sucursal_menu
 *
 * @package App\Models
 */
class IdPosFarolito extends Model
{
	protected $table = 'id_pos_farolito';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_pos' => 'int',
		'id_menu' => 'int'
	];

	protected $fillable = [
		'id_pos',
		'sucursal_pos',
		'id_menu',
		'sucursal_menu'
	];
}
