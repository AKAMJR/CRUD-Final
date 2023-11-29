<?php


$dbname = "id21577392_registros";
$dbuser = "id21577392_jesus";
$dbhost = "localhost";
$dbpass = "Jesus9910.";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


?>