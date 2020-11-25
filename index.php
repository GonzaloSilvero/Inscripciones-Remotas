<!DOCTYPE html>
<html>
<head>
<?php include 'head.html';?>
<link href="estilos/signin.css" rel="stylesheet">
</head>

<header>
<nav class="navbar navbar-expand navbar-dark bg-dark" >
    <a class="navbar-brand" href="https://www.instagram.com/tecnicacatorce/"><i class="fab fa-instagram"></i></a>
    <a class="navbar-brand" href="https://www.facebook.com/profile.php?id=100006789528190"><i class="fab fa-facebook"></i></a>
    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item">
        </li>
        </ul>
    </div>
    <a class="navbar-brand" href="cerrar_sesion.php"><i class="fas fa-door-open"></i></a>
</nav>
</header>



    <body class="text-center">
        <form class="form-signin mt-5" action="index.php" method="POST">
            <h1 class="h1">Formulario de inscripcion</h1>
            <center>
            <label for="inputTutor" class="sr-only">Usuario<br></label>
            <input type="text" id="inputTutor" name="usuario" class="form-control" placeholder="Dni Tutor" required autofocus>
            <label for="inputAlumn" class="sr-only">Contraseña<br></label>
            <input type="password" id="inputAlumn" name="contrasena" class="form-control" placeholder="Dni Alumno" required>
            <input class="btn btn-lg btn-secondary btn-block" name="ingresar" type="submit" value="ingresar"><br>
        </form>
        
        si no eres parte del establecimiento: <a href="tutor.php" >Registrarse</a>
        
        </center>

        <?php
            

            if (isset($_POST['ingresar']))
            {
                $conexion =mysqli_connect("localhost", "root", "","sorteo");
                //Recoger los valores del formulario de registro
                $usuario = $_POST['usuario'];
                $contrasena= $_POST['contrasena'];

                $resultado_usuario= mysqli_query($conexion, "SELECT * FROM `tutor` WHERE `Usuario` = '$usuario' ");
                $usuarioBase= mysqli_fetch_assoc($resultado_usuario);

                
                if ($usuario == 00000000) {
                    if ($contrasena == 00000000) {
                        session_start();
                        $_SESSION['admin']= "admin";
                        header("Location: panelAdmin/panel.php");
                        die();
                    }
                }
                else if ($usuario == $usuarioBase['Usuario']) {
                    if ($contrasena == $usuarioBase['Contraseña']) {
                        session_start();
                        $_SESSION['usuario']=$_POST['usuario'];
                        header("Location: hub.php");
                        die();    
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("contraseña erronea");</script>';
                    }
                }
                else 
                {
                    echo '<script type="text/javascript">alert("usuario invalido");</script>';
                }
                mysqli_close($conexion);
            }
            
            include 'footer.html';
            ?>
    </body>
</html>
