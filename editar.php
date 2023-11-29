<?php
include("conexion.php");
?>
<html>
<head>
    <title>EDITAR</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
    <?php
    $nombre = $nocontrol = $escuela = $semestre = $sistema = ""; // Inicializa todas las variables

    // Aquí se presiona el botón enviar
    if (isset($_POST['enviar'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $nocontrol = $_POST['nocontrol'];
        $escuela = $_POST['escuela'];
        $semestre = $_POST['semestre'];
        $sistema = $_POST['sistema'];

        $sql = "UPDATE alumnos SET nombre='".$nombre."', nocontrol='".$nocontrol."', escuela='".$escuela."', semestre='".$semestre."', sistema='".$sistema."' WHERE id='".$id."'";
        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo "<script language='JavaScript'
            alert('Los datos se actualizaron correctamente');
            location.assign('Listas.php');
            </script>";
        } else {
            echo "<script language='JavaScript'>
            alert('Los datos NO se actualizaron correctamente');
            location.assign('Listas.php');
            </script>";
        }
        mysqli_close($conexion);

    } else {
        // Aquí entra si no se ha presionado el botón

        $id = $_GET['id'];
        $sql = "SELECT * FROM alumnos WHERE id='".$id."'";
        $resultado = mysqli_query($conexion, $sql);

        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila["nombre"];
        $nocontrol = $fila["nocontrol"];
        $escuela = $fila["escuela"];
        $semestre = $fila["semestre"];
        $sistema = $fila["sistema"];
        mysqli_close($conexion);
    ?>
    <h1>Editar alumno</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>"> <br>

        <label>No. Control:</label>
        <input type="text" name="nocontrol" value="<?php echo $nocontrol; ?>"> <br>

        <label>Escuela:</label>
        <input type="text" name="escuela" value="<?php echo $escuela; ?>"> <br>

        <label>Semestre:</label>
        <input type="text" name="semestre" value="<?php echo $semestre; ?>"> <br>

        <label>Sistema:</label>
        <input type="text" name="sistema" value="<?php echo $sistema; ?>"> <br>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <input type="submit" name="enviar" value="ACTUALIZAR">
        <a href="Listas.php">Regresar</a>
    </form>
    <?php
    }
    ?>
</body>
</html>
