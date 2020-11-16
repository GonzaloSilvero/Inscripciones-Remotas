<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Inscripcion</title>
	<meta charset="UTD-8">
    <link rel="stylesheet" type="text/css" href="estilos/Inicio.css">
	<link rel="stylesheet" type="text/css" href="estilos/Main.css">
</head>

<!----Registro---->
<body>

	<header>Formulario de Inscripcion</header>
	
   <center>
	<form action="index.php" method="post">

	  <article id="cuerpo">

		  <section>	Usuario<br>
		  	<input type="text" name="Usuario">
		  </section>

		  <section>
		  	Contraseña<br>
		  	<input type="text" name="Contraseña">
		  </section>

		  	<input type="submit" name="ingresar" value="ingresar">
	  </article>
	</form>

		<a href="tutor.php">Registrarse</a>

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

   
</body>
</html>
