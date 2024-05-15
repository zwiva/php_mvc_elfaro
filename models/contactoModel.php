<?php

class ContactoModel
{
    private $contactos;
    private $nombre;
    private $email;
    private $mensaje;
    private $connection;

    public function __construct()
    {
        require_once "config/database.php";
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

    public function createContacto($nombre, $email, $mensaje)
    {
        $this->connection = new Conectar();
        // $newconnection = $this->connection->establecerConexion();
        
        // $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";

        // $stmt = $newconnection->prepare($sql);
        // $stmt->bind_param("sss", $nombre, $email, $mensaje);
        // $stmt->execute();
        // $result = $stmt->get_result();
        // return $result;
        // mysqli_close($newconnection);
    }

    public function readContactos()
    {
        $sql = "SELECT * FROM contactos";
        $newconnection = new Conectar;
        $connection = $newconnection->conexion()->prepare($sql);
        $connection->execute();
        $result = $connection;
        return $result;
        $connection = null;        
    }

    public function updateContacto($idcontacto, $nombre, $email, $mensaje)
    {
        // $this->connection = new Conectar();
        // $newconnection = $this->connection->establecerConexion();

        // $sql = "UPDATE contactos SET nombre=?, email=?, mensaje=? WHERE id_contacto=?";

        // $stmt = $newconnection->prepare($sql);
        // $stmt->bind_param("sssi", $nombre, $email, $mensaje, $idcontacto);
        // $stmt->execute();
        // $result = $stmt->get_result();
        // return $result;
        // mysqli_close($newconnection);
    }

    public function deleteContacto($idcontacto)
    {
        // $this->connection = new Conectar();
        // $newconnection = $this->connection->establecerConexion();

        // $sql = "DELETE FROM contactos WHERE id_contacto = ?";

        // $stmt = $newconnection->prepare($sql);
        // $stmt->bind_param("i", $idcontacto);
        // $stmt->execute();
        // $result = $stmt->get_result();
        // return $result;
        // mysqli_close($newconnection);
    }
}


// public function readContactos()
// {
//     // $this->connection = new Conectar();
//     // $newconnection = $this->connection->conexion();
//     // $sql = "SELECT * FROM contactos";
//     // $stmt = $newconnection->prepare($sql);
//     // $stmt->execute();
//     // $result = $stmt->get_result();
//     // return $result;
//     // mysqli_close($newconnection);     
// }