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
			<input type="text" name="nombreAl" require>
		<br>
			Apellido
		<br>
			<input type="text" name="apellidoAl" require>
		<br>
			Edad
		<br>
			<input type="text" name="edadAl" require>
		<br>
			Domicilio
		<br>
			<input type="text" name="domicilioAl" require>
		<br>
			Escuela anterior
		<br>
			<input type="text" name="escAnterior" require>
		</article>
		<article class="colum2">
		<section>
			Adjuntar DNI
		<br>
			<input type="file" name="ImagDNIAl" accept="image/*" require>
		<br>
			Adjuntar Constancia
		<br>
			<input type="file" name="constancia" accept="image/*" require>
		</section>
			
		</article>
	</form>

	<div><input type="submit" name="ida" value="Finalizar"></div>
	</center>
</body>
</html>