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
			
			<a href="index.php?c=novedad&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>id Reporte</th>
							<th>id Ambiente</th>
							<th>id Tipo Novedad</th>
							<th>Descripción</th>
							<th>Fecha Registro</th>
							<th> </th>
							<th> </th>
						
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["Novedad"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["idReporte"]."</td>";
							echo "<td>".$dato["idAmbiente"]."</td>";
							echo "<td>".$dato["idTipoNovedad"]."</td>";
							echo "<td>".$dato["descripcion"]."</td>";
							echo "<td>".$dato["fechaRegistro"]."</td>";
							echo "<td><a href='index.php?c=novedad&a=modificar&idReporte=".$dato["idReporte"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=novedad&a=eliminar&idReporte=".$dato["idReporte"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>