<?php
/*$id=$_GET['id'];
include("conexion.php");

//delete from alumnos where id=$id
$sql="delete from alumnos where id='".$id."'";
$resultado=mysqli_query($conexion,$sql);

if ($resultado) {
    echo "<script languaje='JavaScript'>
    alert('Los datos se eliminaron correctamente de la BD');
    location.assign('index.php');
    </script>";
} else{
    echo "<script languaje='JavaScript'>
    alert('Los datos NO se eliminaron  de la BD');
    location.assign('index.php');
    </script>";
}*/



include("conexion.php");

if (isset($_GET['id'])) {
    $id_a_eliminar = $_GET['id'];

    // Eliminar el registro deseado
    $sql_eliminar = "DELETE FROM alumnos WHERE id = $id_a_eliminar";
    $resultado_eliminar = mysqli_query($conexion, $sql_eliminar);

    if ($resultado_eliminar) {
        // Reorganizar los identificadores después de la eliminación
        $sql_reorganizar1 = "SET @num := 0;";
        $sql_reorganizar2 = "UPDATE alumnos SET id = @num := @num + 1;";
        $sql_reorganizar3 = "ALTER TABLE alumnos AUTO_INCREMENT = 1;";

        mysqli_query($conexion, $sql_reorganizar1);
        mysqli_query($conexion, $sql_reorganizar2);
        mysqli_query($conexion, $sql_reorganizar3);

        // Mostrar mensaje en JavaScript
        echo "<script>alert('Registro eliminado correctamente.'); window.location.href = 'Listas.php';</script>";
        exit();  // Asegurarse de que el script termine aquí para evitar ejecución adicional
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>

