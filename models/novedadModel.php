<?php
	
	class Novedad_model {
		
		private $db;
		private $novedad;
		
		public function __construct(){

			$this->db = Conectar::conexion();
			$this->novedad = array();
		}
		
		public function get_Novedades()
		{
			$sql = "SELECT * FROM Novedad";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->novedad[] = $row;
			}
			return $this->novedad; 
		}
		
		public function insertar($idReporte, $idAmbiente, $idTipoNovedad, $descripcion, $fechaRegistro){
			$fechaRegistro = date("Y-m-d H:i:s", time());
			
			$resultado = $this->db->query("INSERT INTO Novedad (idReporte, idAmbiente, idTipoNovedad, descripcion, fechaRegistro) VALUES ('$idReporte', '$idAmbiente', '$idTipoNovedad', '$descripcion', '$fechaRegistro')");
			
		}
		
		public function modificar($idReporte, $idAmbiente, $idTipoNovedad, $descripcion, $fechaRegistro){
			
			$resultado = $this->db->query("UPDATE Novedad SET   idTipoNovedad=$idTipoNovedad, idAmbiente='$idAmbiente', descripcion='$descripcion', fechaRegistro='$fechaRegistro' WHERE idReporte = '$idReporte'");			
		}
		
		public function eliminar($idReporte){
			
			$resultado = $this->db->query("DELETE FROM Novedad WHERE idReporte = '$idReporte'");
			
		}
		
		public function get_Novedad($idReporte)
		{
			$sql = "SELECT * FROM Novedad WHERE idReporte='$idReporte' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>