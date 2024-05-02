<?php

class ArticuloModel
{
    private $db;
    private $articulos;
    private $categoria;
    private $titulo;
    private $descripcion;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->articulos = array();
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

    public function insertar($categoria, $titulo, $descripcion)
    {
        $resultado = $this->db->query("INSERT INTO articulos (categoria, email, descripcion) VALUES ('$categoria', '$titulo', '$descripcion')");
    }
}
