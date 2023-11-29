<html>
<head>
    <title>Agregar</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <?php
    if (isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $nocontrol = $_POST['Nocontrol'];
        $escuela = $_POST['escuela'];
        $semestre = $_POST['semestre'];
        $sistema = $_POST['sistema'];

        include("conexion.php");

        $sql = "INSERT INTO alumnos (nombre, nocontrol, escuela, semestre, sistema)
                VALUES ('".$nombre."', '".$nocontrol."', '".$escuela."', '".$semestre."', '".$sistema."')";

        $resultado = mysqli_query($conexion, $sql);

        if($resultado){
            echo " <script language='JavaScript'>
                    alert('Los datos fueron ingresados correctamente a la BD');
                    location.assign('Listas.php');
                    </script>";
        } else {
            echo " <script language='JavaScript'>
            alert('ERROR: Los datos NO fueron ingresados correctamente a la BD');
            location.assign('Listas.php');
            </script>";
        }
        mysqli_close($conexion);

    } else {
    ?>
    <h1>Agregar nuevo alumno</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre"><br>
        <label>No. Control:</label>
        <input type="text" name="Nocontrol"><br>
        <label>Escuela:</label>
        <input type="text" name="escuela"><br>
        <label>Semestre:</label>
        <input type="text" name="semestre"><br>
        <label>Sistema:</label>
        <input type="text" name="sistema"><br>
        <input type="submit" name="enviar" value="AGREGAR">
        <a href="Listas.php">Regresar</a>
    </form>
    <?php
    }
    ?>
</body>
</html>
