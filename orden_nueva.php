<?php
require_once "conexion.php";

$clientes = $mysqli->query("SELECT rut, Nombre FROM cliente ORDER BY Nombre");
$coordinadores = $mysqli->query("SELECT cedula, Nombre, Apellido FROM coordinadordespacho ORDER BY Nombre");
$productos = $mysqli->query("SELECT codigoProducto, Descripcion, Cantidad FROM productos ORDER BY Descripcion");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2 style="text-align:center">NUEVA ORDEN DE DESPACHO</h2>

  <form action="guardar_orden.php" method="POST">

    <div class="form-group">
      <label>Cliente</label>
      <select name="rutCliente" class="form-control" required>
        <option value="">Seleccione...</option>
        <?php while($c = $clientes->fetch_assoc()) { ?>
          <option value="<?php echo $c["rut"]; ?>">
            <?php echo $c["rut"] . " - " . $c["Nombre"]; ?>
          </option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label>Coordinador</label>
      <select name="cedulaCoordinador" class="form-control" required>
        <option value="">Seleccione...</option>
        <?php while($co = $coordinadores->fetch_assoc()) { ?>
          <option value="<?php echo $co["cedula"]; ?>">
            <?php echo $co["cedula"] . " - " . $co["Nombre"] . " " . $co["Apellido"]; ?>
          </option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label>Producto</label>
      <select name="codigoProducto" class="form-control" required>
        <option value="">Seleccione...</option>
        <?php while($p = $productos->fetch_assoc()) { ?>
          <option value="<?php echo $p["codigoProducto"]; ?>">
            <?php echo $p["codigoProducto"] . " - " . $p["Descripcion"] . " (Stock: " . $p["Cantidad"] . ")"; ?>
          </option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label>Cantidad</label>
      <input type="number" name="cantidad" min="1" class="form-control" required>
    </div>

    <button class="btn btn-success">Guardar</button>
    <a href="listar_ordenes.php" class="btn btn-default">Cancelar</a>
  </form>
</div>
</body>
</html>
