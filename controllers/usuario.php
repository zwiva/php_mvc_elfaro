<?php

class UsuarioController
{
	private $usuariosArr;

	public function __construct()
	{
		$this->usuariosArr = array();
		require_once "models/usuarioModel.php";
		require_once "config/database.php";
	}

	public function nuevoregistrousuario()
	{
		require_once "views/registro.php";
	}

	public function registro_ok()
	{
		require_once "views/registro_ok.php";
	}
	
	public function getUsuarios()
	{
		$usuarios = new Conectar();
		$resultado = $usuarios->readUsuarios();

		while ($row = $resultado->fetch_assoc()) {
			$this->usuariosArr[] = $row;
		}
		
		$data["usuarios"] = $this->usuariosArr;
		require_once "views/usuarios.php";
	}

	public function guardaregistrousuario()
	{
		$nombre = $_POST['clientname'];
		$email = $_POST['clientemail'];
		$rut = $_POST['clientrut'];
		$fono = $_POST['clientfono'];

		$usuario = new Conectar();
		$usuario->createUsuario($nombre, $email, $rut, $fono);
		$this->registro_ok();
	}

	public function editarUsuario()
	{
		// $nombre = $_POST['clientname'];
		// $email = $_POST['clientemail'];
		// $rut = $_POST['clientrut'];
		// $fono = $_POST['clientfono'];

		// $usuario = new Conectar();
		// $usuario->createUsuario($nombre, $email, $rut, $fono);
		// $this->registro_ok();
	}


	public function eliminarUsuario() {
		
	}

}
