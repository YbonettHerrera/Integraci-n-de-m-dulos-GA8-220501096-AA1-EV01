<?php
require_once "conexion.php";

$idOrden = (int)($_GET["idOrden"] ?? 0);
if ($idOrden <= 0) {
  die("ID inválido.");
}

$stmt = $mysqli->prepare("DELETE FROM ordenesdespacho WHERE idOrden = ?");
$stmt->bind_param("i", $idOrden);
$stmt->execute();

header("Location: listar_ordenes.php");
exit;
