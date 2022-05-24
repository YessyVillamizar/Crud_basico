<?php
	
	class 	NovedadController {
		
		public function __construct(){
			require_once "models/novedadModel.php";
		}
		
		public function index(){
			
			
			$novedad = new Novedad_model();
			$data["titulo"] = "novedad";
			$data["Novedad"] = $novedad->get_Novedades();
			
			require_once "views/novedad/novedad.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Novedad";
			require_once "views/novedad/novedad_nuevo.php";
		}
		
		public function guarda(){
			
			$idReporte = $_POST['idReporte'];
			$idAmbiente = $_POST['idAmbiente'];
			$idTipoNovedad = $_POST['idTipoNovedad'];
			$description = $_POST['descripcion'];
		//	$fechaRegistro = $_POST['fechaRegistro'];
			$fechaRegistro = date("Y-m-d H:i:s", time());
			
			$novedad = new Novedad_model();
			$novedad->insertar($idReporte, $idAmbiente, $idTipoNovedad, $description, $fechaRegistro);
			$data["titulo"] = "Novedad";
			$this->index();
		}
		
		public function modificar($idReporte){
			
			$novedad = new Novedad_model();

			$data["idReporte"] = $idReporte;
			$data["Novedad"] = $novedad->get_Novedad($idReporte);
			$data["titulo"] = "Novedad";
			require_once "views/novedad/novedad_modifica.php";
		}
		
		public function actualizar(){

			$idReporte = $_POST['idReporte'];
			$idAmbiente = $_POST['idAmbiente'];
			$idTipoNovedad = $_POST['idTipoNovedad'];
			$descripcion = $_POST['descripcion'];
			$fechaRegistro = $_POST['fechaRegistro'];
		

			$novedad = new Novedad_model();
			$novedad->modificar($idReporte, $idAmbiente, $idTipoNovedad, $descripcion, $fechaRegistro);
			$data["titulo"] = "Novedad";
			$this->index();
		}
		
		public function eliminar($idReporte){
			
			$novedad = new Novedad_model();
			$novedad->eliminar($idReporte);
			$data["titulo"] = "Novedad";
			$this->index();
		}	
	}
?>