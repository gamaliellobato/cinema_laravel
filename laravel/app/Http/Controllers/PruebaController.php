<?php namespace Cinema\Http\Controllers;

class PruebaController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "Hola desde controller";
	}

	public function nombre($nombre)
	{
		return "hola mi nombre es:".$nombre;
	}
}
