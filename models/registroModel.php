<?php

class RegistroModel
{
	private $db;
	private $registros;

	private $nombre;
	private $rut;
	private $email;
	private $fono;

	public function __construct()
	{
		$this->db = Conectar::conexion();
		$this->registros = array();
	}

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function setrut($rut)
    {
        $this->rut = $rut;
    }

    function getrut()
    {
        return $this->rut;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setFono($fono)
    {
        $this->fono = $fono;
    }

    function getfono()
    {
        return $this->fono;
    }

	public function insertar($nombre, $rut, $email, $fono)
	{
		$resultado = $this->db->query("INSERT INTO usuarios (nombre, rut, email, fono) VALUES ('$nombre', '$rut', '$email', '$fono')");
	}


}
