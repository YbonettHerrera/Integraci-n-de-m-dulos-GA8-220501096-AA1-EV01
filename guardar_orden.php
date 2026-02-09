<?php
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("No llegó por POST. Abre el formulario y guarda desde allá.");
}

$rutCliente = isset($_POST["rutCliente"]) ? (int)$_POST["rutCliente"] : 0;
$cedulaCoordinador = isset($_POST["cedulaCoordinador"]) ? (int)$_POST["cedulaCoordinador"] : 0;
$codigoProducto = isset($_POST["codigoProducto"]) ? (int)$_POST["codigoProducto"] : 0;
$cantidad = isset($_POST["cantidad"]) ? (int)$_POST["cantidad"] : 0;

if ($rutCliente <= 0 || $cedulaCoordinador <= 0 || $codigoProducto <= 0 || $cantidad <= 0) {
    die("Datos inválidos. Revisa que todos los campos vengan completos.");
}

// Se inserta orden de despacho
$sql = "INSERT INTO ordenesdespacho (rutCliente, cedulaCoordinador, codigoProducto, cantidad)
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->prepare($sql);
if (!$stmt) {
    die("Error prepare: " . $mysqli->error);
}

$stmt->bind_param("iiii", $rutCliente, $cedulaCoordinador, $codigoProducto, $cantidad);

if (!$stmt->execute()) {
    die("Error execute: " . $stmt->error);
}

$stmt->close();


// Redirigir al listado de ordenes (NO EN BLANCO)
header("Location: listar_ordenes.php");
exit;
