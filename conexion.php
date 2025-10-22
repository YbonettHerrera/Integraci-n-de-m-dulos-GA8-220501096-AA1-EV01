<?php
$mysqli = new mysqli('192.168.0.18', 'root', '', 'dblogistica1');
if ($mysqli->connect_error){
     die('Error en la conexion' . $mysqli->connect_error);
}

printf("servidor informacion: %s\n", $mysqli->server_info);

?>