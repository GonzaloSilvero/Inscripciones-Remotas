<!DOCTYPE html>
<html>
<?php include 'head.html';?>
<link href="estilos/signin.css" rel="stylesheet">
<title>Registro</title>
</head>
<body>		

<?php
	session_start();
	if (!isset($_SESSION["usuario"])) {
        header("location:index.php");
    }
    else if (!isset($_SESSION['id_alumno'])) {
        header("location:hub.php");
    }

    $conexion =mysqli_connect("localhost", "root", "","sorteo");

    $referenciaAlumno = $_SESSION['id_alumno'];

	$resultado_alumno= mysqli_query($conexion, "SELECT * FROM `chicos_i` WHERE `ID` = '$referenciaAlumno' ");
    $datosAlumno= mysqli_fetch_assoc($resultado_alumno);

    $datosAlumno['Nombre'];
    $datosAlumno['Apellido'];
    $datosAlumno['Edad'];
    $datosAlumno['dni'];
    $datosAlumno['Domicilio'];
    $datosAlumno['Escuela_A'];
	?>


	<div class="form-signin">
            <center>
            <h1 class="h1 mb-3 font-weight-normal">Datos del Alumno</h1>
			<input type="text" id="inputNombre" class="form-control" placeholder="Nombre: " value="<?php echo "Nombre: ".$datosAlumno['Nombre']; ?>" disabled >
			
			<input type="text" id="inputApellido" class="form-control" placeholder="Apellido" value="<?php echo "Apellido: ".$datosAlumno['Apellido']; ?>" disabled>

			<input type="tel" id="inputTel" class="form-control" maxlength="10" placeholder="Telefono" value="<?php echo "Edad: ".$datosAlumno['Edad']; ?>" disabled>
			
			<input type="email" id="inputEmail" class="form-control" placeholder="Email" value="<?php echo "DNI: ".$datosAlumno['dni']; ?>" disabled>

			<input type="text" id="inputUsuario" class="form-control" minlength="8" maxlength="8" placeholder="Dni Tutor" value="<?php echo "Domicilio: ".$datosAlumno['Domicilio']; ?>" disabled>
			
			<input type="text" id="inputContraseña" class="form-control" minlength="8" maxlength="8" placeholder="Dni Alumno" value="<?php echo "Escuela_A: ".$datosAlumno['Escuela_A']; ?>" disabled>
			
			<a href="hub.php"> <button class="btn btn-lg btn-secondary btn-block" >Volver</button></a>
            </center>
        </div>
	<?php
	 mysqli_close($conexion);
		include 'footer.html';
	?>

	
</body>
</html>