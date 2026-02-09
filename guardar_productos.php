<?php
require 'conexion.php';

$codigoProducto = $_POST['codigoProducto'];
$codigoBodega   = $_POST['codigoBodega'];
$Descripcion    = $_POST['Descripcion'];
$Cantidad       = $_POST['Cantidad'];
$PRECIO         = $_POST['PRECIO'];

$sql = "INSERT INTO productos 
(codigoProducto, codigoBodega, Descripcion, Cantidad, PRECIO)
VALUES ('$codigoProducto', '$codigoBodega', '$Descripcion', '$Cantidad', '$PRECIO')";

if($mysqli->query($sql)) {
    header("Location: listar_productos.php");
} else {
    echo "Error: " . $mysqli->error;
}
