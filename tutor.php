<!DOCTYPE html>
<html>
<head>
	<title>Registro Tutor</title>
	<link rel="stylesheet" type="text/css" href="estilos/Tutor.css">
</head>

<body> 

    <div>
	<form action="efectuarRegistro.php" method="POST">			
		<label for ="Nomber_T">Nombre</label><br>
		<input type="text" name="Nombre_T"/><br>

		<label for ="Apellido_T">Apellido</label><br>
		<input type="text" name="Apellido_T"/><br>

		<label for ="Telefono_T">Telefono</label><br>
		<input type="tel" name="Telefono_T"/><br>


		<label for ="Gmail_T">Gmail</label><br>
		<input type="email" name="Gmail_T"/><br>



		<label for ="Usuario_T">Usuario</label><br>
		<input type="text" name="Usuario_T"/><br>


		<label for ="contrasena_T">Contraseña</label><br>
		<input type="password" name="contrasena_T"/><br>


		<input type="submit" name='submit' value="Registrarse">
	</form>
    </div>
</body>
</html>