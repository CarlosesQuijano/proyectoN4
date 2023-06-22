<?php 

include ("../config/conexion.php");

$Id = $_GET['Id'];
$sql = "DELETE FROM clases WHERE id_clases = '$Id'";


$query = mysqli_query($conexion, $sql);
if($query === TRUE){
    header("location:../production/materias.php");
}else{
    echo "No se puedo eliminar";
}

?>