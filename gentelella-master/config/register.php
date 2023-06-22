<?php

    
    session_start(); //Asignación de sesión para cada archivo PHP

    if (isset($_SESSION['email'])){
        header('Location: ./login.php'); //Redirige a login.php si ya hay una sesión activa
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_EMAIL); 
        $password = strtolower($_POST['password']);
        $name = $_POST['nombre'];
        $address = $_POST['direccion']; 
        $dni = $_POST['dni'];
        $errores = '';

        if (empty($email) || empty($password)){ //Verifica que los campos no estén vacíos
            $errores .= '<div class="alert alert-primary" role="alert">Rellene todos los campos requeridos</div>';
        } else {
            try {
                $conexion = new PDO('mysql:host=localhost;dbname=uni', 'root', '');
            } catch (PDOException $e){
                echo "Error: " . $e->getMessage();
            }

            $statement = $conexion->prepare("SELECT * FROM users WHERE email = :email LIMIT 1"); 
            $statement->execute(array(':email' => $email));
            $resultado = $statement->fetch();

            if ($resultado !== false){
                $errores .= '<div class="alert alert-primary" role="alert">El correo ya está registrado</div>';
            }

            if ($errores == ''){
                $statement = $conexion->prepare('INSERT INTO users(id_user, email, contra, nombre, dni, direccion) VALUES (NULL, :email, :contra, :nombre, :dni, :direccion)');
                $statement->execute(array(
                    ':email' => $email,
                    ':contra' => $password,
                    ':nombre' => $name,
                    ':dni' => $dni,
                    ':direccion' => $address,
                    
                ));

                header('location: ./login.php');
            }
        }
    }

?>