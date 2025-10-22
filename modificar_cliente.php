<?php
	require 'conexion.php';
	
	$rut = $_GET['rut'];
	
	$sql = "SELECT * FROM cliente WHERE rut = '$rut'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR CLIENTE</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update_cliente.php" autocomplete="off">
            <div class="form-group">
					<label for="rut" class="col-sm-2 control-label">rut</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="rut" name="rut" placeholder="rut" value="<?php echo $row['rut']; ?>" required>
					</div>
			</div>
                <div class="form-group">
					<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" rut="rut" name="rut" value="<?php echo $row['rut']; ?>" />
				
				<div class="form-group">
					<label for="Correo" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo" value="<?php echo $row['Correo']; ?>"  required>
					</div>

				</div>
                <div class="form-group">
					<label for="Nomenclatura" class="col-sm-2 control-label">Nomenclatura</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nomenclatura" name="Nomenclatura" placeholder="Nomenclatura" value="<?php echo $row['Nomenclatura']; ?>"  required>
					</div>
				</div>

                <div class="form-group">
					<label for="Barrio" class="col-sm-2 control-label">Barrio</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="Barrio" name="Barrio" placeholder="Barrio" required>
					</div>
				</div>

                <div class="form-group">
					<label for="Municipio" class="col-sm-2 control-label">Municipio</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="Municipio" name="Municipio" placeholder="Municipio" required>
					</div>
				</div>
                
                <div class="form-group">
					<label for="Telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
					<input type="number" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono">
					</div>
				</div>
                
                <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="listar_cliente.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>