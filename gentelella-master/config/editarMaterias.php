<?php
include("../config/conexion.php");

$nombre_clase = $_POST['nombre_clase'];
$grado = $_POST['grado'];
$id_clases = $_POST['id_clases'];

$sql = "UPDATE clases SET nombre_clase=?, grado=? WHERE id_clases=?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sii", $nombre_clase, $grado, $id_clases);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("location:../production/materias.php");
} else {
    echo "Error al actualizar los datos";
}

$stmt->close();
$conexion->close();
?>
