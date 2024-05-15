<?php

class UsuarioModel
{
    private $registros;
    private $nombre;
    private $rut;
    private $email;
    private $fono;
    private $connection;

    public function __construct()
    {
        require_once "config/database.php";
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

    public function createUsuario($nombre, $rut, $email, $fono)
    {
        $sql = "INSERT INTO usuarios (nombre, rut, email, fono) VALUES (:nombre, :rut, :email, :fono)";
        $newconnection = new Conectar();
        $connection = $newconnection->conexion()->prepare($sql);
        $connection->bindParam(':nombre', $nombre);
        $connection->bindParam(':rut', $rut);
        $connection->bindParam(':email', $email);
        $connection->bindParam(':fono', $fono);
        $connection->execute();
        $connection = null;
    }

    public function readUsuarios()
    {
        $sql = "SELECT * FROM usuarios";
        $newconnection = new Conectar();
        $connection = $newconnection->conexion()->prepare($sql);
        $connection->execute();
        $result = $connection;
        return $result;
        $connection = null;
    }

    public function updateUsuario($idusuario, $nombre, $rut, $email, $fono)
    {
        // $this->connection = new Conectar();
        // $newconnection = $this->connection->establecerConexion();

        // $sql = "UPDATE usuarios SET nombre=?, rut=?, email=?, fono=? WHERE id_usuario=?";

        // $stmt = $newconnection->prepare($sql);
        // $stmt->bind_param("ssssi", $nombre, $rut, $email, $fono, $idusuario);
        // $stmt->execute();
        // $result = $stmt->get_result();
        // return $result;
        // mysqli_close($newconnection);
    }

    public function deleteUsuario($idusuario)
    {
        // $this->connection = new Conectar();
        // $newconnection = $this->connection->establecerConexion();

        // $sql = "DELETE FROM usuarios WHERE id_usuario = ?";

        // $stmt = $newconnection->prepare($sql);
        // $stmt->bind_param("i", $idusuario);
        // $stmt->execute();
        // $result = $stmt->get_result();
        // return $result;
        // mysqli_close($newconnection);

    }
    // ------------------------- mysqli ---------------------------

    public function createUsuario2($nombre, $rut, $email, $fono) // mysqli
    {
        $this->connection = new Conectar();
        $newconnection = $this->connection->establecerConexion();

        $sql = "INSERT INTO usuarios (nombre, rut, email, fono) VALUES (?, ?, ?, ?)";

        $stmt = $newconnection->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $rut, $email, $fono);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
        mysqli_close($newconnection);
    }

    public function readUsuarios2() // mysqli
    {
        $this->connection = new Conectar();
        $newconnection = $this->connection->establecerConexion();
        $sql = "SELECT * FROM usuarios";
        $stmt = $newconnection->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
        mysqli_close($newconnection);
    }
}
