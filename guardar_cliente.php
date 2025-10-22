<?php
require 'conexion.php';
$rut = $_POST['rut'];
$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Nomenclatura = $_POST['Nomenclatura'];
$Barrio = $_POST['Barrio'];
$Municipio = $_POST['Municipio'];
$Telefono = $_POST['Telefono'];

$sql = "INSERT INTO cliente (rut,Nombre, Correo, Nomenclatura, Barrio, Municipio, Telefono)
VALUES ('$rut', '$Nombre', '$Correo', '$Nomenclatura', '$Barrio', '$Municipio', '$Telefono')";
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
					
					<a href="listar_cliente.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>