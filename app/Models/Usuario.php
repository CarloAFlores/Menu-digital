<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $nombre
 * @property string|null $usuario
 * @property string|null $contrasenha
 * @property string|null $correo
 * @property string|null $telefono
 * @property int $id_rol
 * @property int $id_marca
 * @property string|null $token
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	public $timestamps = false;

	protected $casts = [
		'id_rol' => 'int',
		'id_marca' => 'int'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'nombre',
		'usuario',
		'contrasenha',
		'correo',
		'telefono',
		'id_rol',
		'id_marca',
		'token'
	];
}
