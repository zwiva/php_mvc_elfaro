<?php

class UsuarioController
{

	public function __construct()
	{
		require_once "models/usuarioModel.php";
	}

	public function nuevoregistrousuario()
	{
		require_once "views/registro.php";
	}

	public function registro_ok()
	{
		require_once "views/registro_ok.php";
	}

	public function guardaregistrousuario()
	{
		$nombre = $_POST['clientname'];
		$email = $_POST['clientemail'];
		$rut = $_POST['clientrut'];
		$fono = $_POST['clientfono'];

		$usuario = new usuarioModel();
		$usuario->insertar($nombre, $rut, $email, $fono);
		$this->registro_ok();
	}
}
