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
					<input type="file" id="a" name="ImagDNI_A">
				<!--<div class="custom-file">
				    <input type="file" class="custom-file-input" id="a" name="ImagDNI_A" aria-describedby="inputGroupFileAddon01">
				    <label class="custom-file-label" for="inputGroupFile01">Subir Foto</label>
				</div>--><br>


				<script type="text/javascript">
					document.getElementById("a").onchange = function(e) {
					// Creamos el objeto de la clase FileReader
					let reader = new FileReader();
					// Leemos el archivo subido y se lo pasamos a nuestro fileReader
					reader.readAsDataURL(e.target.files[0]);
					// Le decimos que cuando este listo ejecute el código interno
					reader.onload = function(){
						let preview = document.getElementById('preview'),
								image = document.createElement('img');
						image.src = reader.result;
						preview.innerHTML = '';
						preview.append(image);
					};
					}
				</script>

					<h6>Adjuntar Constancia</h6>
				<div class="custom-file">
				  <input type="file" class="custom-file-input" id="inputGroupFile01" name="constancia" aria-describedby="inputGroupFileAddon01">
				  <label class="custom-file-label" for="inputGroupFile01">Subir Foto</label>
				</div><br>

					<button class="btn btn-lg btn-secondary btn-block mt-4" name="ida" type="submit">Ingresar</button>

				</center>
	</form>


	<?php
	session_start();
	if (!isset($_SESSION["usuario"])) {
	header("location:index.php");
	}
	//creo ruta para guardar las imagenes
	$destino= "/img";

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
			//ACA CAMBIO LAS LLAMADAS DE IMAGENES
			$imagenDNI= uniqid().$_FILES['ImagDNI_A']['name'];
			$constancia= uniqid().$_FILES['constancia']['name'];
			//ACA CAMBIO LAS LLAMADAS DE IMAGENES
			$busquedaDni="SELECT * FROM chicos_i WHERE dni ='$dni_A'";

			if ($resultadoDni = $conexion->query($busquedaDni)) {
				if($resultadoDni->num_rows>0){
					header("Location:alumno.php?existe=si&nombre=$nombre_A&apellido=$apellido_A&edad=$edad_A&año=$ano_A&domicilio=$domicilio_A&escuela=$escuelaAnt");
				}
				else
				{
					$consulta="INSERT INTO `chicos_i` (`Nombre`, `Apellido`, `Edad`, `Domicilio`, `Escuela_A`, `dni`, `fotocopia`, `constancia`, `año_a_ingresar`) VALUES ('$nombre_A', '$apellido_A', '$edad_A', '$domicilio_A', '$escuelaAnt', '$dni_A', '$imagenDNI', '$constancia', '$ano_A');";
					$resultado= mysqli_query($conexion, $consulta);

					// agrego para q la imagen se copie en la carpeta del host
					if ($resultado) {
						move_uploaded_file($_FILES['ImagDNI_A']['tmp_name'], $destino.$imagenDNI);
						move_uploaded_file($_FILES['constancia']['tmp_name'], $destino.$$constancia);

						}
					//


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
