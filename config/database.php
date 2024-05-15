<?php

include_once "config/config.php";

class Conectar
{
	private	$servername = DB_HOST;
	private $username = DB_USER;
	private $password = DB_PASSWORD;
	private $database = DB_NAME;

	public function conexion() // version PDO
	{
		$conn = "mysql:host=" . $this->servername . ";dbname=" . $this->database;
		try {
			$connection = new PDO($conn, $this->username, $this->password);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $connection;
		} catch (PDOException $e) {
			die("error en conexion: " . $e->getMessage());
		}
	}
	public function establecerConexion() // versión mysqli 
	{
		// crear conexion
		$connection = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

		// check conexion
		if (!$connection) {
			die("Conexion fallida: " . mysqli_connect_error());
		}
		// echo "Conexion exitosa";
		return $connection;
	}
}


// DELIMITER $$

// CREATE PROCEDURE agregarUsuario(IN _nombre VARCHAR(50), IN _rut VARCHAR(10), IN _email VARCHAR(50), IN _fono VARCHAR(10))
// BEGIN
//    INSERT INTO usuarios (nombre, rut, email, fono) VALUES (_nombre, _rut, _email, _fono);
// END$$

// DELIMITER $$

// CALL agregarUsuario("andreitaaa","1234567890","correo@correo.cl","1234567890");