<?php

require_once "config/config.php";
require_once "core/routes.php";
require_once "config/database.php";
require_once "controllers/main.php";
require_once "controllers/contacto.php";
require_once "controllers/usuario.php";

// c: controlador
// a: accion

if (isset($_GET['c'])) { // si hay controlador especifico

	$controlador = cargarControlador($_GET['c']);

	if (isset($_GET['a'])) {
		cargarAccion($controlador, $_GET['a']);
	} else {
		cargarAccion($controlador, ACCION_PRINCIPAL);
	}

} else { // ir a controlador principal

	$controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
	$accionTmp = ACCION_PRINCIPAL;
	$controlador->$accionTmp();

}
