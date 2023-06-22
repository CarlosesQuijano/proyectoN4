<?php
include("../config/conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$fecha_cumple = $_POST['fecha_cumple'];
$DNI = $_POST['DNI'];
$id_estudiante = $_POST['id_estudiante'];

$sql = "UPDATE students SET nombre=?, apellido=?, direccion=?, fecha_cumple=?, DNI=? WHERE id_estudiante=?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sssssi", $nombre, $apellido, $direccion, $fecha_cumple, $DNI, $id_estudiante);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("location:../production/index.php");
} else {
    echo "Error al actualizar los datos";
}

$stmt->close();
$conexion->close();
?>
