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

	<form action="efectuarRegistro.php" method="get">
		<center>
		<article id="cuerpo">
			<section>
				<label>Nombre
				<br>
				<input type="text" name="nombreTuto" placeholder="Nombre" required></label>
			</section>
			<section>
			<label>Apellido
				<br>
				<input type="text" name="apellidoTuto" placeholder="Apellido" required></label>
			</section>
			<section>
			<label>Telefono
				<br>
				<input type="tel" name="telefono" placeholder="xx xxxx xxxx" maxlength="10" required></label>
			</section>
			<section>
			<label>Email
				<br>
				<input type="email" name="gmailTuto" placeholder="ejemplo@gmail.com" required></label>
			</section>
			<section>
			<label>Usuario
				<br>
				<input type="text" name="usuario" placeholder="DNI del tutor" minlength="8" maxlength="8" required></label>
			</section>
			<section>
			<label>Contraseña
				<br>
				<input type="text" name="contraseña" placeholder="DNI del alumno" minlength="8" maxlength="8" required></label>
			</section>
				<input type="submit" name="ida" value="Registrarse">
		</article>	
	</form>
	</center>
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