<?php namespace sistemaDeportivo\Http\Controllers;

class InicioController extends Controller {


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "holi";
	}

	public function nombre($nombre)
	{
		return "tu nombre es : ".$nombre;
	}


}
