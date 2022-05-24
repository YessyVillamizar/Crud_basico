<?php

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=novedad&a=guarda" autocomplete="off">						
				<div class="form-group">
					<label for="idReporte">idReporte</label>
					<input type="text" class="form-control" id="idReporte" name="idReporte" />
				</div>
				
				<div class="form-group">
					<label for="idAmbiente">idAmbiente</label>
					<input type="text" class="form-control" id="idAmbiente" name="idAmbiente" />
				</div>
				
				<div class="form-group">
					<label for="idTipoNovedad">idTipoNovedad</label>
					<input type="text" class="form-control" id="idTipoNovedad" name="idTipoNovedad" />
				</div>
				
				<div class="form-group">
					<label for="descripcion">Descripcion</label>
					<input type="text" class="form-control" id="descripcion" name="descripcion" />
				</div>
				
							
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>