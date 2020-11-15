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
			Usuario
			<br>
			<input type="text" name="Usuario">
		</section>
		<section>
			Contraseña
			<br>
			<input type="text" name="Contraseña">
		</section>
			<input type="submit" name="ingresar" value="ingresar">
	</article>
	</form>
	<div>
		si no eres parte del establecimiento: <a href="tutor.php" >Registrarse</a>
	</div>
	</center>
	<!----pie de pagina---->
	<footer>
		<p>Direccion:bariloche 4455,La Matanza Telefono:(011)4444-5555 Gmail:eest14lamatanza@abc.gob.ar    &copy; <?=date('y')?> </p>
	</footer>
</body>
</html>
