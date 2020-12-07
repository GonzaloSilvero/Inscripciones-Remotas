<!DOCTYPE html>
<html>
	<?php include 'head.html';?>
	<link href="estilos/signin.css" rel="stylesheet">
	<title>Registrar Ingresante</title>
</head>
<body>
<?php include 'nav.html';?>
<?php
$nombre="";
$apellido="";
$edad="";
$año="";
$domicilio="";
$escuela="";
if(isset($_REQUEST["existe"])){
	$nombre=$_REQUEST["nombre"];
	$apellido=$_REQUEST["apellido"];
	$edad=$_REQUEST["edad"];
	$año=$_REQUEST["año"];
	$domicilio=$_REQUEST["domicilio"];
	$escuela=$_REQUEST["escuela"];

	echo '<script type="text/javascript">alert("Ya existe ese DNI, Por favor inserte otro");</script>';
}
?>
        <form class="form-signin" action="alumno.php" method="POST">
        	<center>
			<h1 class="h1 mb-3 font-weight-normal">Aspirante</h1>
					<input type="text" class="form-control" name="nombre_A" placeholder="Nombre" value="<?php echo $nombre?>" required autofocus>

					<input type="text" class="form-control" name="apellido_A" placeholder="Apellido" value="<?php echo $apellido?>" required>

					<input type="text" class="form-control" name="edad_A" maxlength="2" placeholder="Edad" value="<?php echo $edad?>" required autofocus>

					<input type="text" class="form-control" name="dni_A" maxlength="8" placeholder="DNI" required>

					<input type="text" class="form-control" name="ano_A" maxlength="1" placeholder="Año a Ingresar" value="<?php echo $año?>" required>

					<input type="text"  class="form-control" name="domicilio_A" placeholder="Domicilio" value="<?php echo $domicilio?>" required autofocus>

					<input type="text" class="form-control" name="escAnterior" placeholder="Escuela anterior" value="<?php echo $escuela?>" required>


					<h6>Adjuntar DNI</h6>
				<div class="custom-file">
				    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
				    <label class="custom-file-label" name="ImagDNI_A" for="inputGroupFile01">Subir Foto</label>
				</div><br>

					<h6>Adjuntar Constancia</h6>
				<div class="custom-file">
				  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
				  <label class="custom-file-label" name="constancia" for="inputGroupFile01">Subir Foto</label>
				</div><br>

					<button class="btn btn-lg btn-secondary btn-block mt-4" name="ida" type="submit">Ingresar</button>

				</center>
	</form>


	<?php
	session_start();
	if (!isset($_SESSION["usuario"])) {
	header("location:index.php");
	}
		//require_once 'conexiones.php';
		if (isset($_POST['ida'])) {
			include 'conexion.php';

			//Recoger los valores del formulario de registro
			$nombre_A= $_POST['nombre_A'];
			$apellido_A= $_POST['apellido_A'];
			$edad_A= $_POST['edad_A'];
			$dni_A= $_POST['dni_A'];
			$ano_A= $_POST['ano_A'];
			$domicilio_A= $_POST['domicilio_A'];
			$escuelaAnt= $_POST['escAnterior'];
			$imagenDNI= $_POST['ImagDNI_A'];
			$constancia= $_POST['constancia'];

			$busquedaDni="SELECT * FROM chicos_i WHERE dni ='$dni_A'";

			if ($resultadoDni = $conexion->query($busquedaDni)) {
				if($resultadoDni->num_rows>0){
					header("Location:alumno.php?existe=si&nombre=$nombre_A&apellido=$apellido_A&edad=$edad_A&año=$ano_A&domicilio=$domicilio_A&escuela=$escuelaAnt");
				}
				else
				{
					$consulta="INSERT INTO `chicos_i` (`Nombre`, `Apellido`, `Edad`, `Domicilio`, `Escuela_A`, `dni`, `fotocopia`, `constancia`, `año_a_ingresar`) VALUES ('$nombre_A', '$apellido_A', '$edad_A', '$domicilio_A', '$escuelaAnt', '$dni_A', '$imagenDNI', '$constancia', '$ano_A');";
					$resultado= mysqli_query($conexion, $consulta);

					$id_alumno= $conexion->insert_id;

					$sesion=$_SESSION['usuario'];

					$consulta="SELECT * FROM `tutor` WHERE `Usuario` = $sesion";
					$resultado1= mysqli_query($conexion, $consulta);
					$resultadot = mysqli_fetch_assoc($resultado1);
					$id_tutor=$resultadot['ID'];

					$consulta="INSERT INTO `tienechicos` (`id_tutor`, `id_chicos`) VALUES ('$id_tutor', '$id_alumno');";
					$resultado= mysqli_query($conexion, $consulta);


					mysqli_close($conexion);

					header("Location: hub.php");

					die();
				}
			}
			mysqli_close($conexion);
		}
		include 'footer.html';
	?>
</body>
</html>
