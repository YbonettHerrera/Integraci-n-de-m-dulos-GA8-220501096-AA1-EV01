<?php
// conexion.php
$mysqli = new mysqli("127.0.0.1", "root", "", "dblogistica1");

if ($mysqli->connect_errno) {
    die("Error de conexión MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8mb4");

// Se usa para la conexion mysqli_query($conexion, ...)
$conexion = $mysqli;
