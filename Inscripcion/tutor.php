<!DOCTYPE html>
<html>
<head>
	<title>Registro Tutor</title>
	<link rel="stylesheet" type="text/css" href="estilos/Tutor.css">
</head>
</head>
<body>
	<header>
		Registro
	</header>
	
	<form action="efectuarRegistro.php" method="get">
		<center>
		<article id="cuerpo">
			<section>
				Nombre
				<br>
				<input type="text" name="nombreTuto">
			</section>
			<section>
				Apellido
				<br>
				<input type="text" name="apellidoTuto">
			</section>
			<section>
				Telefono
				<br>
				<input type="number" name="cantidad">
			</section>
			<section>
				Gmail
				<br>
				<input type="text" name="gmailTuto">
			</section>
			<section>
				Usuario
				<br>
				<input type="text" name="usuario">
			</section>
			<section>
				Contraseña
				<br>
				<input type="text" name="contraseña">
			</section>
				<input type="submit" name="ida" value="Registrarse">
		</article>
		</center>
	</form>

</body>
</html>