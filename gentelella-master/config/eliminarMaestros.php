<?php 

include ("../config/conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM students WHERE id_estudiante = '$Id'";


$query = mysqli_query($conexion, $sql);
if($query === TRUE){
    header("location:../production/index.php");
}else{
    echo "No se puedo eliminar";
}

?>