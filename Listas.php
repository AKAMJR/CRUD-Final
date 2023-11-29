<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos</title>
    <script type="text/javascript">
        function confirmar() {
            return confirm('¿Estás seguro? Se eliminarán los datos.');
        }
    </script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<?php
include("conexion.php");

$sql = "SELECT * FROM alumnos";
$resultado = mysqli_query($conexion, $sql);
?>

<h1>Lista de Alumnos</h1>


<a href="agregar.php">Nuevo Alumno</a><br><br>
<table>
    <thead>
    <tr>
        <th>No.</th>
        <th>Nombre</th>
        <th>No. Control</th>
        <th>Escuela</th>
        <th>Semestre</th>
        <th>Sistema</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($filas = mysqli_fetch_assoc($resultado)) {
        ?>
        <tr>
            <td><?php echo $filas['id'] ?></td>
            <td><?php echo $filas['nombre'] ?></td>
            <td><?php echo $filas['nocontrol'] ?></td>
            <td><?php echo $filas['escuela'] ?></td>
            <td><?php echo $filas['semestre'] ?></td>
            <td><?php echo $filas['sistema'] ?></td>
            <td>
                <?php echo "<a href='editar.php?id=" . $filas['id'] . "'>EDITAR</a> "; ?>
                -
                <?php echo "<a href='eliminar.php?id=" . $filas['id'] . "' onclick='return confirmar()'>ELIMINAR</a> "; ?>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<?php
mysqli_close($conexion);
?>
</body>