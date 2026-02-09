<?php
require_once "conexion.php";

$sql = "SELECT 
          o.idOrden, o.fecha, o.cantidad,
          c.rut, c.Nombre AS clienteNombre,
          cd.cedula, cd.Nombre AS coordNombre, cd.Apellido AS coordApellido,
          p.codigoProducto, p.Descripcion AS productoDesc
        FROM ordenesdespacho o
        INNER JOIN cliente c ON c.rut = o.rutCliente
        INNER JOIN coordinadordespacho cd ON cd.cedula = o.cedulaCoordinador
        INNER JOIN productos p ON p.codigoProducto = o.codigoProducto
        ORDER BY o.idOrden DESC";

$resultado = $mysqli->query($sql);
if(!$resultado){
  die("Error en consulta: " . $mysqli->error);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 style="text-align:center">ORDENES DE DESPACHO</h2>

  <a href="orden_nueva.php" class="btn btn-primary">NUEVA ORDEN</a>
  <a href="index.php" class="btn btn-default">REGRESAR</a>

  <br><br>

  <?php if($resultado->num_rows == 0) { ?>
    <div class="alert alert-info">
      No hay órdenes creadas todavía. Dale clic a <b>NUEVA ORDEN</b> para crear la primera.
    </div>
  <?php } else { ?>

  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Fecha</th>
          <th>Cliente</th>
          <th>Coordinador</th>
          <th>Producto</th>
          <th>Cantidad</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      <?php while($row = $resultado->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row["idOrden"]; ?></td>
          <td><?php echo $row["fecha"]; ?></td>
          <td><?php echo $row["rut"] . " - " . $row["clienteNombre"]; ?></td>
          <td><?php echo $row["cedula"] . " - " . $row["coordNombre"] . " " . $row["coordApellido"]; ?></td>
          <td><?php echo $row["codigoProducto"] . " - " . $row["productoDesc"]; ?></td>
          <td><?php echo $row["cantidad"]; ?></td>
          <td>
            <a href="#" data-href="eliminar_orden.php?idOrden=<?php echo $row["idOrden"]; ?>"
               data-toggle="modal" data-target="#confirm-delete">
               <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

  <?php } ?>
</div>

<!-- Modal para eliminar -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminar orden</h4>
      </div>

      <div class="modal-body">¿Desea eliminar esta orden?</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-danger btn-ok">Eliminar</a>
      </div>

    </div>
  </div>
</div>

<script>
$('#confirm-delete').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>

</body>
</html>
