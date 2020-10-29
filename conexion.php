<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ventas_autos";

// Crear conexion
$conexion = new mysqli($servername, $username, $password, $dbname);
// verificar conexion
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}

?>