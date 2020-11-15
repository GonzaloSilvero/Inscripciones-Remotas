<!DOCTYPE html>
<html>
<head>
	<title>Registro Tutor</title>
	<link rel="stylesheet" type="text/css" href="estilos/Tutor.css">
	<link rel="stylesheet" type="text/css" href="estilos/Main.css">
</head>
</head>
<body>		
	<header>
	<center>
		<div class="Titulo">
		Registro
		</div>
	</center>
	</header>
	<!-- -->

	<form action="efectuarRegistro.php" method="POST">
		<center>
		<article id="cuerpo">

			<section>
				<label>Nombre<br>
				<input type="text" name="nombre_T" placeholder="Nombre" required></label>
			</section>

			<section>
				<label>Apellido<br>
				<input type="text" name="apellido_T" placeholder="Apellido" required></label>
			</section>

			<section>
				<label>Telefono<br>
				<input type="tel" name="telefono_T" placeholder="xx xxxx xxxx" maxlength="10" required></label>
			</section>

			<section>
				<label>Email<br>
				<input type="email" name="Email_T" placeholder="ejemplo@gmail.com" required></label>
			</section>

			<section>
				<label>Usuario<br>
				<input type="text" name="usuario_T" placeholder="DNI del tutor" minlength="8" maxlength="8" required></label>
			</section>

			<section>
				<label>Contraseña<br>
				<input type="text" name="contrasena_T" placeholder="DNI del alumno" minlength="8" maxlength="8" required></label>
			</section>

				<input type="submit" name="ida" value="Registrarse">
		</article>	
	</form>
	</center>

	
	<?php
		if (isset($_POST['ida'])) {

			//Recoger los valores del formulario de registro
			$nombre_T= isset($_POST['nombre_T']) ? $_POST ['nombre_T']: false;
			$apellido_T= isset($_POST['apellido_T']) ? $_POST ['apellido_T']: false;
			$telefono_T= isset($_POST['telefono_T']) ? $_POST ['telefono_T']: false;
			$Email_T= isset($_POST['email_T']) ? $_POST ['Email_T']: false;
			$Usuario_T= isset($_POST['usuario_T']) ? $_POST ['Usuario_T']: false;
			$contrasena_T= isset($_POST['contrasena_T']) ? $_POST ['contrasena_T']: false;
			//Array de errores
		}
	?>

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