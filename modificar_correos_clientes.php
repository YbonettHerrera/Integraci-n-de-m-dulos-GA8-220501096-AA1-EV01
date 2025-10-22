<?php
	require 'conexion.php';
	
	$correo=$_GET['correo'];
	
	$sql = "SELECT * FROM correos_clientes WHERE correo = '$correo'";
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
				<h3 style="text-align:center">MODIFICAR CORREO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update_correos_clientes.php" autocomplete="off">
            <div class="form-group">
					<label for="correo" class="col-sm-2 control-label">correo</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="correo" name="correo" placeholder="correo" value="<?php echo $row['correo']; ?>" required>
					</div>
			</div>
                <div class="form-group">
					<label for="rut" class="col-sm-2 control-label">rut</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="rut" name="rut" placeholder="rut" value="<?php echo $row['rut']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="idcorreos_clientes" name="idcorreos_clientes" value="<?php echo $row['idcorreos_clientes']; ?>" />
				
				
                
                <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="listar_correos_clientes.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>