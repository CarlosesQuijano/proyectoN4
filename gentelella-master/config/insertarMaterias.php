<?php 
include ("../config/conexion.php");


$nombre_clase = $_POST['nombre_clase'];
$grado = $_POST['grado'];



$sql = "INSERT INTO clases (nombre_clase, grado) VALUES ('$nombre_clase','$grado')";

$resultado = mysqli_query($conexion, $sql);


if ($resultado === TRUE){
    header("location:../production/materias.php");
    
} else {
    echo "Datos no insertados";
}


?>