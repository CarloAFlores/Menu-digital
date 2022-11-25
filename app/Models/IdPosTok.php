<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IdPosTok
 * 
 * @property int|null $id_pos
 * @property int|null $id_menu
 *
 * @package App\Models
 */
class IdPosTok extends Model
{
	protected $table = 'id_pos_toks';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_pos' => 'int',
		'id_menu' => 'int'
	];

	protected $fillable = [
		'id_pos',
		'id_menu'
	];
}
