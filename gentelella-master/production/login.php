<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login bg-white">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form  class="form_container" action="../config/login.php" method="POST" name="login">
            <div class="login">
            <img style="height: 200px;" class="text-center" src="../production/images/byu.png" alt="Logo">
          </div>
              <h1>Inicia Sesion</h1>
              <div>
                <input type="text" class="form-control" placeholder="Email" required="" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
              </div>
              <div>
              <button type="submit" class="btn btn-primary" style="width:350px;"  value="Login" onclick="login.submit()">Ingresar</button>
                <a class="reset_pass" href="#">Olvidaste tu contraseña?</a>
              </div>

              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">Eres nuevo?
                  <a href="#signup" class="to_register"> Crear cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-user"></i> Bienvenido</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form class="form_container" action="../config/register.php " method="POST">
              <h1>Crear Cuenta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nombre" required=""  name="nombre"/>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required=""  name="email"/>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="DNI" required="" name="dni"/>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Direccion" required=""  name="direccion"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required=""  name="password"/>
              </div>
              <div>
              <button type="submit" class="btn btn-primary" value="Start">Registrar</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Ya eres miembro?
                  <a href="./login.php" class="to_register"> Inicia Sesion </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-tree"></i> Nos alegra que puedas crear tu cuenta</h1>
                  <p>©2023 All Rights Reserved. Privacy and Terms.
                    <br>
                     Carlos Quijano
                  </p>
                </div>
              </div>
              </div>
            <?php
            if (!empty($errores)) {
                echo $errores;
            }
            ?>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
