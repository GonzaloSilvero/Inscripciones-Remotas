<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/Inicio.css">
	<link rel="stylesheet" type="text/css" href="estilos/Main.css">
</head>
<body>
	<center>
	<header>Formulario de Inscripcion</header>
	
	<form action="index.php" method="POST">
	<article id="cuerpo">
		<section>
			<label>Usuario<br>
			<input type="text" name="usuario"></label>
		</section>

		<section>
			<label>Contraseña<br>
			<input type="text" name="contrasena"></label>
		</section>

			<input type="submit" name="ingresar" value="ingresar">
	</article>
	</form>

	<div id="guiaRegistro">
		si no eres parte del establecimiento: <a href="tutor.php" >Registrarse</a>
	</div>
	</center>
	
	<?php

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
					session_start()
					header("Location: hub.php");
					die();
				}
				else
				{
					echo "contraseña erronea";
				}
			}
			else 
			{
				echo "usuario invalido";
			}
		}

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
