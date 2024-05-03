<?php

class ArticuloModel
{
    private $db;
    private $articulos;
    private $usuario;
    private $categoria;
    private $titulo;
    private $descripcion;

    public function __construct()
    {
        $this->db = Conectar::conexion();
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

}
