<?php

$dbname = "id21577392_escuela";
$dbuser = "id21577392_root";
$dbhost = "localhost";
$dbpass = "Jesus9910.";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>