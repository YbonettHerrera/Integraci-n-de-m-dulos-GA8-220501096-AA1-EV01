<?php
require 'conexion.php';
$cedula = $_POST['cedula'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Usuario = $_POST['Usuario'];
$Correo = $_POST['Correo'];
$Ubicación = $_POST['Ubicación'];


$sql = "INSERT INTO coordinadordespacho (cedula,Nombre, Apellido, Usuario, Correo, Ubicación)
VALUES ('$cedula', '$Nombre', '$Apellido', '$Usuario', '$Correo', '$Ubicación')";
$resultado = $mysqli->query($sql);
?>
<html lang="es">
<head>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="listar_coordinador.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>