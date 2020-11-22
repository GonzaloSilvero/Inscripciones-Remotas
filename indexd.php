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
		si no eres parte del establecimiento: <a href="tutor.php">Registrarse</a>
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
