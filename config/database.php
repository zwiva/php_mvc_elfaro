<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "", "elfarodb");
			return $conexion;
			
		}
	}
?>