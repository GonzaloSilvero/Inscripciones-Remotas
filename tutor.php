<!DOCTYPE html>
<html>
<?php include 'head.html';?>
<title>Registro</title>
<link href="estilos/signin.css" rel="stylesheet">
</head>
<body>		

	<form class="form-signin" action="tutor.php" method="POST">
            <center>
            <h1 class="h1 mb-3 font-weight-normal">Registro</h1>
            <label for="inputNombre" class="sr-only">Nombre</label>
			<input type="text" id="inputNombre" class="form-control" name="nombre_T" placeholder="Nombre" required autofocus>
			
            <label for="inputApellido" class="sr-only">Apellido</label>
			<input type="text" id="inputApellido" class="form-control" name="apellido_T" placeholder="Apellido" required>

			<label for="inputTel" class="sr-only">Telefono</label>
			<input type="tel" id="inputTel" class="form-control" name="telefono_T" maxlength="10" placeholder="Telefono" required autofocus>
			
            <label for="inputEmail" class="sr-only">Email</label>
			<input type="email" id="inputEmail" class="form-control" name="email_T" placeholder="Email" required>

			<label for="inputUsuario" class="sr-only">Usuario</label>
			<input type="text" id="inputUsuario" class="form-control" name="usuario_T" minlength="8" maxlength="8" placeholder="Dni Tutor" required autofocus>
			
            <label for="inputContraseña" class="sr-only">Contraseña</label>
			<input type="text" id="inputContraseña" class="form-control" name="contrasena_T" minlength="8" maxlength="8" placeholder="Dni Alumno" required>
			
            <button class="btn btn-lg btn-secondary btn-block" name="ida" type="submit">Ingresar</button>
            </center>
        </form>
	<?php

	$conexion =mysqli_connect("localhost", "root", "","sorteo");


	//require_once 'conexiones.php';
		if (isset($_POST['ida'])) {
			
			//Recoger los valores del formulario de registro
			$nombre_T= $_POST['nombre_T'];
			$apellido_T= $_POST['apellido_T'];
			$telefono_T= $_POST['telefono_T'];
			$Email_T= $_POST['email_T'];
			$Usuario_T= $_POST['usuario_T'];
			$contrasena_T= $_POST['contrasena_T'];
			//$contrasena_T_codificada=password_hash($contrasena_T, PASSWORD_DEFAULT);
			$consulta="INSERT INTO `tutor` (`Nombre`, `Apellido`, `Telefono`, `Usuario`, `Gmail`, `Contraseña`) VALUES ('$nombre_T', '$apellido_T', '$telefono_T', '$Usuario_T', '$Email_T', '$contrasena_T');";
			$resultado= mysqli_query($conexion, $consulta);

			header("Location: index.php");
			die();
		}
		include 'footer.html';
	?>

	
</body>
</html>