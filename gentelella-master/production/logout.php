<?php
    session_start(); //Asignacion de sesion para cada arcchivo php
    session_destroy();
    $_SESSION =array();
    header('location:./login.php')
?>