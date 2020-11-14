<!DOCTYPE html>
<html>
<head>
	<title>Registro Tutor</title>
	<link rel="stylesheet" type="text/css" href="estilos/Alumno.css">
</head>
<body>
	<center>
	<header>Alumno</header>
	<form action="alumno.php" method="get">
	<article class="colum1">
	<section >
			Nombre
		<br>
			<input type="text" name="nombreAl">
		<br>
			Apellido
		<br>
			<input type="text" name="apellidoAl">
		<br>
			Edad
		<br>
			<input type="number" name="edadAl">
		<br>
			3 digitos del DNI
		<br>
			<input type=" number" name="dniAL">
		<br>
			Domicilio
		<br>
			<input type="text" name="domicilioAl">
		<br>
			Escuela anterior
		<br>
			<input type="text" name="escAnterior">
		</article>
		<article class="colum2">
		<section>
			Adjuntar DNI
		<br>
			<input type="file" name="ImagDNIAl" accept="image/*">
		<br>
			Adjuntar Constancia
		<br>
			<input type="file" name="constancia" accept="image/*">
		</section>
			
		</article>
	</form>

	<div><input type="submit" name="ida" value="Finalizar"></div>
	</center>
</body>
</html>