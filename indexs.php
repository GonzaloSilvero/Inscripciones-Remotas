<!DOCTYPE html>
<html>
<head>
<?php include 'head.html';?>
<title>Formulario de Inscripcion</title>
<link href="estilos/signin.css" rel="stylesheet">>
</head>
    <body class="text-center">
        <form class="form-signin">
            <h1 class="h1">Formulario de inscripcion</h1>
            <center>
            <label for="inputTutor" class="sr-only">Usuario</label>
            <input type="text" id="inputTutor" class="form-control" placeholder="Dni Tutor" required autofocus>
            <label for="inputAlumn" class="sr-only">Contraseña</label>
            <input type="text" id="inputAlumn" class="form-control" placeholder="Dni Alumno" required>
            <button class="btn btn-lg btn-secondary btn-block" type="submit">Ingresar<br></button>
        </form>
        
        si no eres parte del establecimiento: <a href="tutor.php" >Registrarse</a>
        
        </center>
    <?php include 'footer.html';

        $conexion =mysqli_connect("localhost", "root", "","sorteo");
            if (isset($_POST['ingresar']))
            {
    
                //Recoger los valores del formulario de registro
                $usuario = $_POST['usuario'];
                $contrasena= $_POST['contrasena'];
    
                $resultado_usuario= mysqli_query($conexion, "SELECT * FROM `tutor` WHERE `Usuario` = '$usuario' ");
                $usuarioBase= mysqli_fetch_assoc($resultado_usuario);
    
                
    
                if ($usuario == $usuarioBase['Usuario']) {
                    
                    if ($contrasena == $usuarioBase['Contraseña']) {
                        header("Location: hub.php");
                        die();
                    }
                    else
                    {
                        echo "contraseña mal";
                    }
                }
                else 
                {
                    echo "no funciona";
                }
            }
    
        ?>
    </body>
</html>
