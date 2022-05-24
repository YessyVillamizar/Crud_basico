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
			<h2><?php echo $data["titulo"]; ?> Modifica</h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=novedad&a=actualizar" autocomplete="off">						
			<input type="hidden" id="idReporte" name="idReporte" value="<?php echo $data["idReporte"]; ?>" />

				<div class="form-group">
					<label for="idAmbiente">idAmbiente</label>
					<input type="text" class="form-control" id="idAmbiente" name="idAmbiente" value="<?php echo $data["Novedad"]["idAmbiente"]?>" />
				</div>
				
				<div class="form-group">
					<label for="idTipoNovedad">idTipoNovedad</label>
					<input type="text" class="form-control" id="idTipoNovedad" name="idTipoNovedad" value="<?php echo $data["Novedad"]["idTipoNovedad"]?>" />
				</div>
				
				<div class="form-group">
					<label for="descripcion">Descripcion</label>
					<input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $data["Novedad"]["descripcion"]?>" />
				</div>
				<input type="hidden" id="fechaRegistro" name="fechaRegistro" value="<?php echo $data["Novedad"]["fechaRegistro"]; ?>" />
							
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>