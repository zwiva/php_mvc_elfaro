<?php

class Conectar
{
	private	$servername;
	private $username;
	private $password;
	private $database;
	private $connection;

	public function __construct()
	{
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->database = "elfarodb";

		// crear conexion
		$this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

		// check conexion
		if (!$this->connection) {
			die("Conexion fallida: " . mysqli_connect_error());
		}

		// echo "Conexion exitosa";
	}

	// public static function conexion()
	// {
	// 	$conexion = new mysqli("localhost", "root", "", "elfarodb");
	// 	return $conexion;
	// }

	// CONTACTO
	public function createContacto($nombre, $email, $mensaje)
	{
		$sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";

		$stmt = $this->connection->prepare($sql);
		$stmt->bind_param("sss", $nombre, $email, $mensaje);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
		mysqli_close($this->connection);
	}

	public function readContactos()
	{
		$sql = "SELECT * FROM contactos";

		$stmt = $this->connection->prepare($sql);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
		mysqli_close($this->connection);
	}

	public function updateContacto($idcontacto, $nombre, $email, $mensaje)
	{
		$sql = "UPDATE contactos SET nombre=?, email=?, mensaje=? WHERE id_contacto=?";

		$stmt = $this->connection->prepare($sql);
		$stmt->bind_param("sssi", $nombre, $email, $mensaje, $idcontacto);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
		mysqli_close($this->connection);
	}

	public function deleteContacto($idcontacto)
	{
		$sql = "DELETE FROM contactos WHERE id_contacto = ?";

		$stmt = $this->connection->prepare($sql);
		$stmt->bind_param("i", $idcontacto);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
		mysqli_close($this->connection);
	}

	// USUARIO
	public function createUsuario($nombre, $rut, $email, $fono)
	{
		$sql = "INSERT INTO usuarios (nombre, rut, email, fono) VALUES (?, ?, ?, ?)";

		$stmt = $this->connection->prepare($sql);
		$stmt->bind_param("ssss", $nombre, $rut, $email, $fono);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
		mysqli_close($this->connection);
	}

	public function readUsuarios()
	{
		$sql = "SELECT * FROM usuarios";

		$stmt = $this->connection->prepare($sql);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
		mysqli_close($this->connection);
	}

	public function updateUsuario($idusuario, $nombre, $rut, $email, $fono)
	{
		$sql = "UPDATE usuarios SET nombre=?, rut=?, email=?, fono=? WHERE id_usuario=?";

		$stmt = $this->connection->prepare($sql);
		$stmt->bind_param("ssssi", $nombre, $rut, $email, $fono, $idusuario);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
		mysqli_close($this->connection);


	}

	// public function deleteUsuario($idusuario)
	// {
	// 	$this->conexion()->query("DELETE FROM usuarios WHERE id_usuario = $idusuario");
	// }


	// // ARTICULO
	// public function createArticulo($usuario, $categoria, $titulo, $detalle)
	// {
	// 	$this->conexion()->query("INSERT INTO usuarios (nombre, rut, email, fono) VALUES ('$usuario', '$categoria', '$titulo', '$detalle')");
	// }

	// public function readArticulos()
	// {
	// 	$this->conexion()->query("SELECT * FROM articulos");
	// }

	// public function updateArticulo($idarticulo, $usuario, $categoria, $titulo, $detalle)
	// {
	// 	$this->conexion()->query("UPDATE articulos SET usuario='$usuario', categoria='$categoria', titulo='$titulo', detalle='$detalle' WHERE id_articulo = $idarticulo ");
	// }

	// public function deleteArticulo($idarticulo)
	// {
	// 	$this->conexion()->query("DELETE FROM articulos WHERE id_articulo = $idarticulo");
	// }




}
