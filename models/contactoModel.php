<?php

class ContactoModel
{
    private $conexion;
    private $contactos;
    private $nombre;
    private $email;
    private $mensaje;

    public function __construct()
    {
        // $this->db;
   
        $this->contactos = array();
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    function getMensaje()
    {
        return $this->mensaje;
    }

}
