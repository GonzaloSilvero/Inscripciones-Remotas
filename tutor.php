<!DOCTYPE html>
<html>
<?php include 'head.html';?>
<title>Registro</title>
<link href="estilos/signin.css" rel="stylesheet">>
</head>
<body>		

	<form class="form-signin">
            <center>
            <h1 class="h1 mb-3 font-weight-normal">Registro</h1>
            <label for="inputNombre" class="sr-only">Nombre</label>
            <input type="text" id="inputNombre" class="form-control" placeholder="Nombre" required autofocus>
            <label for="inputApellido" class="sr-only">Apellido</label>
			<input type="text" id="inputApellido" class="form-control" placeholder="Apellido" required>
			<label for="inputTel" class="sr-only">Telefono</label>
            <input type="text" id="inputTel" class="form-control" placeholder="Telefono" required autofocus>
            <label for="inputEmail" class="sr-only">Email</label>
			<input type="text" id="inputEmail" class="form-control" placeholder="Email" required>
			<label for="inputUsuario" class="sr-only">Usuario</label>
            <input type="text" id="inputUsuario" class="form-control" placeholder="Dni Tutor" required autofocus>
            <label for="inputContraseña" class="sr-only">Contraseña</label>
            <input type="text" id="inputContraseña" class="form-control" placeholder="Dni Alumno" required>
            <button class="btn btn-lg btn-secondary btn-block" type="submit">Ingresar</button>
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

			$consulta="INSERT INTO `tutor` (`ID`, `Nombre`, `Apellido`, `Telefono`, `Usuario`, `Gmail`, `Contraseña`, `Chicos_i`) VALUES ('', '$nombre_T', '$apellido_T', '$telefono_T', '$Usuario_T', '$Email_T', '$contrasena_T', '1');";
			$resultado= mysqli_query($conexion, $consulta);
		}
	?>

<?php include 'footer.html';?>
</body>
</html>