<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Inscripcion</title>
	<meta charset="UTD-8">
	<link rel="stylesheet" type="text/css" href="estilos/Inicio.css">
</head>

<!----Registro---->
<body>

	<header>Formulario de Inscripcion</header>
	
   <center>
	<form action="index.php" method="get">

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
    <div>
		<a href="tutor.php">Registrarse</a>
	</div>
	</center>
	
	<!----pie de pagina---->
	<footer>
		<p>Direccion:bariloche 4455,La Matanza Telefono:(011)4444-5555 Gmail:eest14lamatanza@abc.gob.ar    &copy; <?=date('y')?> </p>
	</footer>
   
</body>
</html>
