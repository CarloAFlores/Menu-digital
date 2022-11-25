<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nombre
 * @property string $correo
 * @property string $contrasenha
 * @property string $telefono
 * @property Carbon $registro
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'cliente';
	public $timestamps = false;

	protected $dates = [
		'registro'
	];

	protected $fillable = [
		'nombre',
		'correo',
		'contrasenha',
		'telefono',
		'registro'
	];
}
