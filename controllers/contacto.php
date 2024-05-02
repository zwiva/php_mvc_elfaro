<?php

class ContactoController
{

	public function __construct()
	{
		require_once "models/contactoModel.php";
	}

	public function nuevocontacto()
	{
		require_once "views/contacto.php";
	}

	public function registro_ok()
	{
		require_once "views/registro_ok.php";
	}

	public function guardacontacto()
	{
		$nombre = $_POST['clientname'];
		$email = $_POST['clientemail'];
		$mensaje = $_POST['clientmsg'];

		$contacto = new contactoModel();
		$contacto->insertar($nombre, $email, $mensaje);
		$this->registro_ok();
	}

}
