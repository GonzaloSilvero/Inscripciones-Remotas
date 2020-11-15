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
		<input type="text" name="nombreAl" required>

		<br>Apellido<br>
		<input type="text" name="apellidoAl" required>

		<br>Edad<br>
		<input type="number" name="edadAl" required>

		<br>3 digitos del DNI<br>
		<input type=" number" name="dniAL" required>

		<br>Domicilio<br>
		<input type="text" name="domicilioAl" required>

		<br>Escuela anterior<br>
		<input type="text" name="escAnterior" required>
		</article>
		
		<article class="colum2">
		<section>
			<div class="adjuntados">
				Adjuntar DNI<br>
				<input type="file" name="ImagDNIAl" accept="image/*" required>
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