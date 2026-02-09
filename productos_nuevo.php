<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Nuevo Producto</h2>

    <form action="guardar_productos.php" method="POST">

        <div class="form-group">
            <label>Código Producto</label>
            <input type="number" name="codigoProducto" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Código Bodega</label>
            <input type="number" name="codigoBodega" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Descripción</label>
            <input type="text" name="Descripcion" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Cantidad</label>
            <input type="number" name="Cantidad" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Precio</label>
            <input type="number" name="PRECIO" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="listar_productos.php" class="btn btn-default">Cancelar</a>
    </form>
</div>
</body>
</html>
