<!DOCTYPE html>
<html>
<head>
	<title>Registro Tutor</title>
	<link rel="stylesheet" type="text/css" href="estilos/Alumno.css">
	<link rel="stylesheet" type="text/css" href="estilos/Main.css">
</head>
<body>
	<center>
	<header>Alumno</header>
	<form action="alumno.php" method="POST">
	<article class="colum1">
	<section>
		Nombre<br>
		<input type="text" name="nombre_A" required>

		<br>Apellido<br>
		<input type="text" name="apellido_A" required>

		<br>Edad<br>
		<input type="number" name="edad_A" required>

		<br>3 digitos del DNI<br>
		<input type="number" name="dni_A" required>

		<br>Domicilio<br>
		<input type="text" name="domicilio_A" required>

		<br>Escuela anterior<br>
		<input type="text" name="escAnterior" required>
		</article>
		
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
	</center>

	<?php
	session_start();
	if (!isset($_SESSION["usuario"])) {
	header("location:index.php");
	}

	$conexion =mysqli_connect("localhost", "root", "","sorteo");


		//require_once 'conexiones.php';
		if (isset($_POST['ida'])) {

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
			$id_tutor = $resultado1->fetch_array();
			$id_t= $resultado1['ID'];
			echo $id_tutor['ID'];
			echo $id_t;
			
			/*$consulta="INSERT INTO `tienechicos` (`id_tutor`, `id_chicos`) VALUES ($id_tutor['ID'], $id_alumno);";
			$resultado= mysqli_query($conexion, $consulta);*/
			
		}

	mysqli_close($conexion);
	
	?>


	<!----pie de pagina---->
	<div id="footer">
		<div class="conteiner">
			<div class="row">
				<div class="col1">
					<p class="info">
						Direccion:<br> 
						bariloche 4455,La Matanza
					</p>
					<p class="info">
						Telefono:<br>
						(011)4444-5555
					</p>
					<p class="info">
						Gmail:<br>
						eest14lamatanza@abc.gob.ar
					</p>
					<p class="info">
						&copy; <?=date('y')?> EEST°14, por alumnos
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>