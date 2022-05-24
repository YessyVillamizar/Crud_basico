<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "", "crud_basico");
			return $conexion;
			
		}
	}
?>