<?php
include("conexion.php");
?>
<html>
<head>
    <title>EDITAR</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>

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
    
    ?>
</body>
</html>
