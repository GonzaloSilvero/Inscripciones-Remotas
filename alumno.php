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
	<form action="alumno.php" method="get">
	<article class="colum1">
	<section >
			Nombre
		<br>
			<input type="text" name="nombreAl" required>
		<br>
			Apellido
		<br>
			<input type="text" name="apellidoAl" required>
		<br>
			Edad
		<br>
			<input type="text" name="edadAl" required>
		<br>
			Domicilio
		<br>
			<input type="text" name="domicilioAl" required>
		<br>
			Escuela anterior
		<br>
			<input type="text" name="escAnterior" required>
		</article>
		<article class="colum2">
		<section>
			Adjuntar DNI
		<br>
			<input type="file" name="ImagDNIAl" accept="image/*" required>
		<br>
			Adjuntar Constancia
		<br>
			<input type="file" name="constancia" accept="image/*" required>
		</section>
			
		</article>
	</form>

	<div><input type="submit" name="ida" value="Finalizar"></div>
	</center>

	<?php
		echo "funciona el breanch?";
	?>
</body>
</html>