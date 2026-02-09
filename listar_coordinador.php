<?php
require 'conexion.php';
$where = "";

if(!empty($_POST))
{
    $valor = $_POST['campo'];
    if(!empty($valor)){
        $where = "WHERE cedula LIKE '%$valor'";
    }
}
$sql = "SELECT * FROM coordinadordespacho $where";
$resultado = $mysqli->query($sql);

?>
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
          <h2 style="text-align:center">GESTION DE COORDINADORES</h2>
        </div>

        <div class="row">
            <a href="coordinador_nuevo.php" class="btn btn-primary">NUEVO COORDINADOR</a>
            <!-- buscador -->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<b>Buscar Coordinador: </b><input type="text" id="campo" name="campo" />
				<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
			</form>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
				<thead>
				    <tr>
                        <th>cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Ubicación</th>
						<th></th>
						<th></th>
                    </tr>
				</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
						<tr>

                              <td><?php echo $row['cedula']; ?></td>
                              <td><?php echo $row['Nombre']; ?></td>
                              <td><?php echo $row['Apellido']; ?></td>
                              <td><?php echo $row['Usuario']; ?></td>
                              <td><?php echo $row['Correo']; ?></td>
                              <td><?php echo $row['Ubicacion']; ?></td>
							  <td><a href="modificar_coordinador.php?cedula=<?php echo $row['cedula']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
							  <td><a href="#" data-href="eliminar_coordinador.php?cedula=<?php echo $row['cedula']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id ="myModalLabel">Eliminar Cliente</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este clente?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		<a href="index.php" class="btn btn-primary">Regresar</a>
	</body>
</html>
            </div>
		</div>
	</body>
	
</html>