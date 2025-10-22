<!DOCTYPE html>
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
				<h3 style="text-align:center">CREAR COORDINADOR NUEVO</h3>
			</div>
			<form class="form-horizontal" method="POST" action="guardar_coordinador.php" autocomplete="off">

			<div class="form-group">
					<label for="cedula" class="col-sm-2 control-label">cedula</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="cedula" name="cedula" placeholder="cedula" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Apellido" class="col-sm-2 control-label">Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Usuario" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Usuario" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Correo" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
					<input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Ubicación" class="col-sm-2 control-label">Ubicación</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="Ubicación" name="Ubicación" placeholder="Ubicación" required>
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
