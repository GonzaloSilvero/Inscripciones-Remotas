<!DOCTYPE html>
<html>
<?php include 'head.html';?>
<link href="estilos/signin.css" rel="stylesheet">
<title>Registro Tutor</title>
</head>
<body>
<?php
$nombre="";
$apellido="";
$telefono="";
$email="";
if(isset($_REQUEST["existe"])){
	$nombre=$_REQUEST["nombre"];
	$apellido=$_REQUEST["apellido"];
	$telefono=$_REQUEST["telefono"];
	$email=$_REQUEST["email"];

	echo '<script type="text/javascript">alert("Ya existe ese usuario, Por favor inserte otro");</script>';
}
if(isset($_REQUEST["repe"])){
	$nombre=$_REQUEST["nombre"];
	$apellido=$_REQUEST["apellido"];
	$telefono=$_REQUEST["telefono"];
	$email=$_REQUEST["email"];

	echo '<script type="text/javascript">alert("Los usuarios ingresados no coinciden");</script>';
}
?>

<header>
<nav class="navbar navbar-expand navbar-dark bg-dark" >
    <a class="navbar-brand" href="https://www.instagram.com/tecnicacatorce/"><i class="fab fa-instagram"></i></a>
    <a class="navbar-brand" href="https://www.facebook.com/profile.php?id=100006789528190"><i class="fab fa-facebook"></i></a>
    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item">
        </li>
        </ul>
    </div>
</nav>
</header>

	<form class="form-signin mt-5" id="formulario" action="tutor.php" method="POST">
            <center>
            <h1 class="h1 mb-3 font-weight-normal">Registro</h1>
			<input type="text" id="inputNombre" class="form-control" name="nombre_T" placeholder="Nombre" value="<?php echo $nombre?>" required autofocus>

			<input type="text" id="inputApellido" class="form-control" name="apellido_T" placeholder="Apellido" value="<?php echo $apellido?>" required>

			<input type="tel" id="inputTel" class="form-control" name="telefono_T" maxlength="10" placeholder="Telefono" value="<?php echo $telefono?>" required autofocus>

			<input type="email" id="inputEmail" class="form-control" name="email_T" placeholder="Email" value="<?php echo $email?>" required>

			<h5>Usuario</h5>
			<input type="text"  class="form-control" name="usuario_T" id="dni1" minlength="8" maxlength="8" placeholder="Dni Tutor" required autofocus>

			<h5>Repita Usuario</h5>
			<input type="text"  class="form-control" name="Rusuario_T" id="dni2" minlength="8" maxlength="8" placeholder="Dni Tutor" required autofocus>

			<h5>Contraseña</h5>
			<input type="text" id="inputContraseña" class="form-control" name="contrasena_T" minlength="8" maxlength="8" placeholder="Dni Alumno" required>

            <button class="btn btn-lg btn-secondary btn-block" name="ida" id="enviar" >Ingresar</button>
            </center>
		</form>
		<script src="validaciones/jquery-3.5.1.js"></script>
    	<script src="validaciones/validar.js"></script>
	<?php

	include 'conexion.php';


	//require_once 'conexiones.php';
		if (isset($_POST['ida'])) {

			//Recoger los valores del formulario de registro
			$nombre_T= $_POST['nombre_T'];
			$apellido_T= $_POST['apellido_T'];
			$telefono_T= $_POST['telefono_T'];
			$Email_T= $_POST['email_T'];
			$Usuario_T= $_POST['usuario_T'];
			$Rusuario_T= $_POST['Rusuario_T'];
			$contrasena_T= $_POST['contrasena_T'];

			$busquedaUsuario="SELECT * FROM tutor WHERE Usuario = $Usuario_T ";

			if($Usuario_T==$Rusuario_T)
			{
				if ($resultadoUsuario = $conexion->query($busquedaUsuario)) 
				{
					
					if($resultadoUsuario->num_rows>0){
						header("Location:tutor.php?existe=si&nombre=$nombre_T&apellido=$apellido_T&telefono=$telefono_T&email=$Email_T");
						echo "no";
					}
					else
					{
						$consulta="INSERT INTO `tutor` (`Nombre`, `Apellido`, `Telefono`, `Usuario`, `Gmail`, `Contraseña`) VALUES ('$nombre_T', '$apellido_T', '$telefono_T', '$Usuario_T', '$Email_T', '$contrasena_T');";
						$resultado= mysqli_query($conexion, $consulta);
						header("Location: index.php");
						die();
					}
				}
			}
			else
			{
				header("Location:tutor.php?repe=si&nombre=$nombre_T&apellido=$apellido_T&telefono=$telefono_T&email=$Email_T&contrasena=$contrasena_T");
			}
			
		}
		include 'footer.html';
	?>


</body>
</html>
