<?php 
include ("../config/conexion.php");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$fecha_cumple = $_POST['fecha_cumple'];


$sql = "INSERT INTO teachers (nombre,apellido,direccion,fecha_cumple) VALUES ('$nombre','$apellido','$direccion','$fecha_cumple')";

$resultado = mysqli_query($conexion, $sql);


if ($resultado === TRUE){
    header("location:../production/maestros.php");
    
} else {
    echo "Datos no insertados";
}


?>
