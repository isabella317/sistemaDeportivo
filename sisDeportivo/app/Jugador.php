<?php namespace sistemaDeportivo;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model {

	protected $table="numero_jugadors";


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','CodigoCarrera_id','Nombres', 'Apellidos', 'Email','Jornada','Semestre','IDNumero_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['Estado'];


}
