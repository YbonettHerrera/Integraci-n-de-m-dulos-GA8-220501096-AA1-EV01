<?php
require 'conexion.php';

$codigoProducto = $_GET['codigoProducto'];

$sql = "SELECT * FROM productos WHERE codigoProducto = '$codigoProducto'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Modificar Producto</h2>

    <form action="update_productos.php" method="POST">
        <input type="hidden" name="codigoProducto" value="<?php echo $row['codigoProducto']; ?>">

        <div class="form-group">
            <label>Código Bodega</label>
            <input type="number" name="codigoBodega" class="form-control"
                   value="<?php echo $row['codigoBodega']; ?>" required>
        </div>

        <div class="form-group">
            <label>Descripción</label>
            <input type="text" name="Descripcion" class="form-control"
                   value="<?php echo $row['Descripcion']; ?>" required>
        </div>

        <div class="form-group">
            <label>Cantidad</label>
            <input type="number" name="Cantidad" class="form-control"
                   value="<?php echo $row['Cantidad']; ?>" required>
        </div>

        <div class="form-group">
            <label>Precio</label>
            <input type="number" name="PRECIO" class="form-control"
                   value="<?php echo $row['PRECIO']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="listar_productos.php" class="btn btn-default">Cancelar</a>
    </form>
</div>
</body>
</html>
