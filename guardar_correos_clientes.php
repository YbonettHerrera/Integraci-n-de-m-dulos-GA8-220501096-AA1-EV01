<html>

<head>
  <title>GUARDAR CORREO DE CLIENTE</title>
</head>
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
<?php
   $conexion = mysqli_connect("192.168.0.18", "root", "", "dblogistica1") or
    die("Problemas con la conexión");

mysqli_query($conexion, "insert into cliente(rut,nombre,correo) values 
('$_REQUEST[rut]','$_REQUEST[nombre]','$_REQUEST[correo]')")
or die("Problemas en la setencia sql para insertar una persona" . mysqli_error($conexion));

mysqli_close($conexion);


$conexion2 = mysqli_connect("192.168.0.18", "root", "", "dblogistica1") or
die("Problemas con la conexión");

mysqli_query($conexion2, "insert into correos_clientes(correo,rut) values 
('$_REQUEST[correo]','$_REQUEST[rut]')")
or die("Problemas en la setencia sql para insertar un correo" . mysqli_error($conexion2));

mysqli_close($conexion2);

echo "correo insertado.";
?>
	<a href="listar_correos_clientes.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>