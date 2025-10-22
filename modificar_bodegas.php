<?php
	require 'conexion.php';
	
	$codigoBodega = $_GET['codigoBodega'];
	
	$sql = "SELECT * FROM bodegas WHERE codigoBodega = '$codigoBodega'";
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
				<h3 style="text-align:center">MODIFICAR BODEGA</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update_bodegas.php" autocomplete="off">
            <div class="form-group">
					<label for="codigoBodega" class="col-sm-2 control-label">codigoBodega</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="codigoBodega" name="codigoBodega" placeholder="codigoBodega" value="<?php echo $row['codigoBodega']; ?>" required>
					</div>
			</div>
                <div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="codigoBodega" name="codigoBodega" value="<?php echo $row['codigoBodega']; ?>" />
				
				
                
                <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="listar_bodegas.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>