

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="estilo3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <a href="registrar.php.php"><button type="button">Registrarse</button></a>

    <form method="post" action="">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>

        <button type="submit">Iniciar sesión</button>
        <button></button>
    </form>
    <a href="registrar.php">Registrate aqui</a>

</body>
</html>
