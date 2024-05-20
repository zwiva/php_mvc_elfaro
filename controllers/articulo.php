<?php

class ArticuloController
{
	private $articulos;

	public function __construct()
	{
		require_once "models/articuloModel.php";
		require_once "config/database.php";
	}

	public function nuevoarticulo()
	{
		require_once "views/articulo.php";
	}

}
