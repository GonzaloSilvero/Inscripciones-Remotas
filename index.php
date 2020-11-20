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
	
	<!--
	<form>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
			<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1">
		</div>
			<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	-->

	<form action="index.php" method="get">
	<article id="cuerpo">
		<section style="float: left">
			<label>Usuario
			<br>
			<input class="form_input" type="text" name="Usuario" required></label>
		</section>
		<section style="float: left">
			<label>Contraseña
			<br>
			<input class="form_input" type="text" name="Contraseña" required></label>
		</section>
		<section style="clear: both">
			<input type="submit" name="ingresar" value="ingresar">
		</section>
	</article>
	</form> 
	<div id="guiaRegistro">
		Si no eres parte del establecimiento: <a href="tutor.php" >Registrarse</a>
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
