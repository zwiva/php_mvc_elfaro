<?php

class ContactoController
{
	private $contactos;

	public function __construct()
	{
		require_once "models/contactoModel.php";
		require_once "config/database.php";
	}

	public function nuevocontacto()
	{
		require_once "views/contacto.php";
	}

	public function registro_ok()
	{
		require_once "views/registro_ok.php";
	}

	public function getContactos()
	{
		$contactos = new ContactoModel();
		$resultado = $contactos->readContactos();

		while ($row = $resultado->fetchAll()) {
			$this->contactos = $row;
		}

		$data["contactos"] = $this->contactos;
		require_once "views/contactos.php";
	}

	public function guardacontacto() // ok
	{
		$nombre = $_POST['clientname'];
		$email = $_POST['clientemail'];
		$mensaje = $_POST['clientmsg'];

		$contacto = new ContactoModel();
		$contacto->createContacto($nombre, $email, $mensaje);
		$this->registro_ok();
	}
}
