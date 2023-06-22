<?php 
include ("../config/conexion.php");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$fecha_cumple = $_POST['fecha_cumple'];
$DNI= $_POST['DNI'];


$sql = "INSERT INTO students (nombre,apellido,direccion,fecha_cumple,DNI) VALUES ('$nombre','$apellido','$direccion','$fecha_cumple','$DNI')";

$resultado = mysqli_query($conexion, $sql);


if ($resultado === TRUE){
    header("location:../production/index.php");
    
} else {
    echo "Datos no insertados";
}


?>
