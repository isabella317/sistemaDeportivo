<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jugadors', function(Blueprint $table)
		{
			$table->primary('CodigoJugador');
			$table->string('CodigoJugador');
			$table->string('CodigoCarrera_id')->unsigned();
			$table->foreign('CodigoCarrera_id')->references('CodigoCarrera')->on('carreras');
			$table->string('IDUsuario_id')->unsigned();
			$table->foreign('IDUsuario_id')->references('IDUsuario')->on('users');
			$table->string('Nombres');
			$table->string('Apellidos');
			$table->string('Email')->unique();
			$table->string('Jornada');
			$table->integer('Semestre');
			$table->integer('IDNumero_id')->unsigned();
			$table->foreign('IDNumero_id')->references('IDNumero')->on('numero_jugadors');
			$table->boolean('Estado');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jugadors');
	}

}
