<?php
// Incluir el archivo de conexión
include 'conexion2.php';

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para insertar el nuevo usuario
    $sql = "INSERT INTO usuarios (correo, contrasena) VALUES ('$correo', '$contrasena')";
    
    // Ejecutar la consulta
    if (mysqli_query($conexion, $sql)) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="estilo2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

    <h2>Registro</h2>

    <form method="post" action="">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>

        <button type="submit">Registrar</button>
    </form>

    <a href="login.php">¿Ya tienes una cuenta? Inicia sesión aquí</a>

</body>
</html>