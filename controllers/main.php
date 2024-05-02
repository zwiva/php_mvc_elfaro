<?php

class MainController
{

	public function __construct()
	{
		require_once "models/contactoModel.php";
		require_once "models/registroModel.php";
	}

	public function index()
	{
		require_once "views/home.php";
	}

	public function nuevocontacto()
	{
		require_once "views/contacto.php";
	}

	public function nuevoregistro()
	{
		require_once "views/registro.php";
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

	public function guardaregistro()
	{
		$nombre = $_POST['clientname'];
		$email = $_POST['clientemail'];
		$rut = $_POST['clientrut'];
		$fono = $_POST['clientfono'];

		$contacto = new registroModel();
		$contacto->insertar($nombre, $rut, $email, $fono);
		$this->registro_ok();
	}

}
