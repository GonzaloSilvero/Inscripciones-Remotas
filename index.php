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
	
	<form action="index.php" method="get">
	<article id="cuerpo">
		<section>
			<label>Usuario
			<br>
			<input type="text" name="Usuario" required></label>
		</section>
		<section>
			<label>Contraseña
			<br>
			<input type="text" name="Contraseña" required></label>
		</section>
			<input type="submit" name="ingresar" value="ingresar">
	</article>
	</form>
	<div id="guiaRegistro">
		si no eres parte del establecimiento: <a href="tutor.php" >Registrarse</a>
	</div>
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
