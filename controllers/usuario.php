<?php

class UsuarioController
{
	private $usuarios;

	public function __construct()
	{
		require_once "config/database.php";
		require_once "models/usuarioModel.php";
		$this->usuarios = array();
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
		$model = new UsuarioModel();
		$resultado = $model->readUsuarios();
			
		while ($row = $resultado->fetchAll()) {
			$this->usuarios = $row;
		}

		$data["usuarios"] = $this->usuarios;
		require_once "views/usuarios.php";
	}

	public function guardaregistrousuario()
	{
		$nombre = $_POST['clientname'];
		$email = $_POST['clientemail'];
		$rut = $_POST['clientrut'];
		$fono = $_POST['clientfono'];

		$usuario = new UsuarioModel();
		$usuario->createUsuario($nombre, $email, $rut, $fono);
		$this->registro_ok();
	}

	public function editarUsuario() // pendiente
	{
		$nombre = $_POST['clientname'];
		$email = $_POST['clientemail'];
		$rut = $_POST['clientrut'];
		$fono = $_POST['clientfono'];
		$idusuario = $_POST['id'];

		// $usuario = new UsuarioModel();
		// $usuario->updateUsuario($idusuario, $nombre, $email, $rut, $fono);
		// require_once "views/registro.php";
	}


	public function eliminarUsuario() // pendiente
	{
		$idusuario = $_POST['id'];

		// $usuario = new UsuarioModel();
		// $usuario->deleteUsuario($idusuario);
		// require_once "views/usuarios.php";
	}
}
