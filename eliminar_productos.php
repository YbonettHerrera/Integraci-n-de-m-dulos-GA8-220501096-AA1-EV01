<?php
require 'conexion.php';

$codigoProducto = $_GET['codigoProducto'];

$sql = "DELETE FROM productos WHERE codigoProducto='$codigoProducto'";

if($mysqli->query($sql)) {
    header("Location: listar_productos.php");
} else {
    echo "Error: " . $mysqli->error;
}
