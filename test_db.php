<?php
require_once "conexion.php";

echo "Archivo ejecutado: " . __FILE__ . "<br>";
echo "Existe \$mysqli? " . (isset($mysqli) ? "SI" : "NO") . "<br><br>";

$res = $mysqli->query("SELECT COUNT(*) AS total FROM productos");
$row = $res->fetch_assoc();

echo "Conexión OK ✅ | Productos: " . $row["total"];
