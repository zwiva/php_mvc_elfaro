<?php

class MainController // principal
{

	public function __construct()
	{
		require_once "models/contactoModel.php";
		require_once "config/database.php";
	}

	public function index()
	{
		// $contactos = new Conectar2();
		// $data["contactos"] = $contactos->readContactos();
		require_once "views/home.php";
	}

}
