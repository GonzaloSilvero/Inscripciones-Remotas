<!DOCTYPE html>
<html>
<head>
	<title>Registro Tutor</title>
	<link rel="stylesheet" type="text/css" href="estilos/Tutor.css">
</head>

<body> 
    <?php require_once 'helpers.php'; ?>
    <?php require_once 'efectuarRegistro.php'; ?>
    
    <div>
	
	<?php  if (isset($_SESSION['errores'])):?>		
	<?php 	var_dump($_SESSION['errores']);?>
	<?php  endif;?>

	<h3>Registro</h3>

    <form action="efectuarRegistro.php" method="POST">	

		<label for ="Nombre_T">Nombre</label><br>
		<input type="text" name="Nombre_T"/><br>
		<?php echo mostrarError($_SESSION['errores'],'Nombre_T'); ?>
 
		<label for ="Apellido_T">Apellido</label><br>
		<input type="text" name="Apellido_T"/><br>
		

		<label for ="Telefono_T">Telefono</label><br>
		<input type="tel" name="Telefono_T"/><br>
		


		<label for ="Gmail_T">Gmail</label><br>
		<input type="email" name="Gmail_T"/><br>
		



		<label for ="Usuario_T">Usuario</label><br>
		<input type="text" name="Usuario_T"/><br>
		


		<label for ="password_T">Contraseña</label><br>
		<input type="password" name="password_T"/><br>
		


		<input type="submit" name='submit' value="Registrarse">
	</form>
    </div>
</body>
</html>