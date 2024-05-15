<?php

class ArticuloModel
{
    private $articulos;
    private $usuario;
    private $categoria;
    private $titulo;
    private $descripcion;
    private $connection;

    public function __construct()
    {
        require_once "config/database.php";
        $this->articulos = array();
    }

    function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    function getusuario()
    {
        return $this->usuario;
    }

    function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    function getCategoria()
    {
        return $this->categoria;
    }

    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    function getTitulo()
    {
        return $this->titulo;
    }

    function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    function getDescripcion()
    {
        return $this->descripcion;
    }

    public function createArticulo($usuario, $categoria, $titulo, $detalle)
    {
        // $this->connection = new Conectar();
        // $newconnection = $this->connection->establecerConexion();

        // $sql = "INSERT INTO usuarios (nombre, rut, email, fono) VALUES ('$usuario', '$categoria', '$titulo', '$detalle')";
    }

    public function readArticulos()
    {
        // $this->connection = new Conectar();
        // $newconnection = $this->connection->establecerConexion();

        // $sql = "SELECT * FROM articulos";
    }

    public function updateArticulo($idarticulo, $usuario, $categoria, $titulo, $detalle)
    {
        // $this->connection = new Conectar();
        // $newconnection = $this->connection->establecerConexion();

        // $sql = "UPDATE articulos SET usuario='$usuario', categoria='$categoria', titulo='$titulo', detalle='$detalle' WHERE id_articulo = $idarticulo ";
    }

    public function deleteArticulo($idarticulo)
    {
        // $this->connection = new Conectar();
        // $newconnection = $this->connection->establecerConexion();

        // $sql = "DELETE FROM articulos WHERE id_articulo = $idarticulo";
    }
}
