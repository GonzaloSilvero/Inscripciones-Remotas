<!DOCTYPE html>
<html>
<head>
	<title>Formulario Ingresante</title>
	<?php include 'head.html';?>
</head>
<body>
			<h1 class="h1 mb-3 font-weight-normal">Ingresante</h1>
        <form class="form-signin" action="tutor.php" method="POST">
            <center>
			
			<input type="text" id="inputNombre" class="form-control" name="nombre_T" placeholder="Nombre" required autofocus>
			
			<input type="text" id="inputApellido" class="form-control" name="apellido_T" placeholder="Apellido" required>

			<input type="tel" id="inputTel" class="form-control" name="telefono_T" maxlength="10" placeholder="Edad" required autofocus>
			
			<input type="email" id="inputEmail" class="form-control" name="email_T" placeholder="Ultimos 3 digitos del DNI" required>

			<input type="text" id="inputUsuario" class="form-control" name="usuario_T" minlength="8" maxlength="8" placeholder="Domicilio" required autofocus>
			
			<input type="text" id="inputContraseña" class="form-control" name="contrasena_T" minlength="8" maxlength="8" placeholder="Escuela anterior" required>
			
            <button class="btn btn-lg btn-secondary btn-block" name="ida" type="submit">Ingresar</button>
            </center>
        </form>
		
		<article class="colum2">
		<section>
			<div class="adjuntados">
				Adjuntar DNI<br>
				<input type="file" name="ImagDNI_A" accept="image/*" required>
			</div>

			<div class="adjuntados">
				Adjuntar Constancia<br>
				<input type="file" name="constancia" accept="image/*" required>
			</div>
		</section>	
		</article>

		<div id="boton"><input type="submit" name="ida" value="Finalizar"></div>
	</form>


	<?php
	session_start();
	if (!isset($_SESSION["usuario"])) {
	header("location:index.php");
	}
		//require_once 'conexiones.php';
		if (isset($_POST['ida'])) {			
			$conexion =mysqli_connect("localhost", "root", "","sorteo");

			//Recoger los valores del formulario de registro
			$nombre_A= $_POST['nombre_A'];
			$apellido_A= $_POST['apellido_A'];
			$edad_A= $_POST['edad_A'];
			$dni_A= $_POST['dni_A'];
			$domicilio_A= $_POST['domicilio_A'];
			$escuelaAnt= $_POST['escAnterior'];
			$imagenDNI= $_POST['ImagDNI_A'];
			$constancia= $_POST['constancia'];

			//$contrasena_T_codificada=password_hash($contrasena_T, PASSWORD_DEFAULT);

			$consulta="INSERT INTO `chicos_i` (`Nombre`, `Apellido`, `Edad`, `Domicilio`, `Escuela_A`, `dni`, `fotocopia`, `constancia`) VALUES ('$nombre_A', '$apellido_A', '$edad_A', '$domicilio_A', '$escuelaAnt', '$dni_A', '$imagenDNI', '$constancia');";
			$resultado= mysqli_query($conexion, $consulta);
			
			$id_alumno= $conexion->insert_id;

			$sesion=$_SESSION['usuario'];

			$consulta="SELECT * FROM `tutor` WHERE `Usuario` = $sesion";
			$resultado1= mysqli_query($conexion, $consulta);
			$resultadot = mysqli_fetch_assoc($resultado1);
			$id_tutor=$resultadot['ID'];
			
			$consulta="INSERT INTO `tienechicos` (`id_tutor`, `id_chicos`) VALUES ('$id_tutor', '$id_alumno');";
			$resultado= mysqli_query($conexion, $consulta);

			mysqli_close($conexion);

			header("Location: hub.php");
			die();
		}

	
		include 'footer.html';
	?>
</body>
</html>