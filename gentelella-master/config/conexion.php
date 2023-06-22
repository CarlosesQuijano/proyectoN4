<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "uni";


$conexion=new mysqli($host, $user, $pass, $db);

if (!$conexion){
    echo "Conexion fallidad";
}


?>