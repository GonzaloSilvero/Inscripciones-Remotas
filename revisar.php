<!DOCTYPE html>
<html>
<?php include 'head.html';?>
<link href="estilos/signin.css" rel="stylesheet">
<title>Revisar Ingresante</title>
</head>
<body>		
<?php include 'nav.html';?>
<?php
	session_start();
	if (!isset($_SESSION["usuario"])) {
        header("location:index.php");
    }

    $conexion =mysqli_connect("localhost", "root", "","sorteo");

    $referenciaAlumno = $_REQUEST['id'];

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

            <div class="input-group">
				<input type="text" class="form-control-dis mb-2" placeholder="Nombre: " value="<?php echo "Nombre: ".$datosAlumno['Nombre']; ?>" disabled>
				<div class="input-group-append">
					<button class="btn btn-warning" type="button"><i class="fas fa-edit"></i></button>
				</div>
			</div>
			
			<div class="input-group">
				<input type="text" id="inputApellido" class="form-control-dis mb-2" placeholder="Apellido" value="<?php echo "Apellido: ".$datosAlumno['Apellido']; ?>" disabled>
				<div class="input-group-append">
					<button class="btn btn-warning" type="button"><i class="fas fa-edit"></i></button>
				</div>
			</div>


			<div class="input-group">
				<input type="tel" id="inputTel" class="form-control-dis mb-2" maxlength="10" placeholder="Telefono" value="<?php echo "Edad: ".$datosAlumno['Edad']; ?>" disabled>
				<div class="input-group-append">
					<button class="btn btn-warning" type="button"><i class="fas fa-edit"></i></button>
				</div>
			</div>			

			<div class="input-group">
				<input type="num" id="inputDNI" class="form-control-dis mb-2" placeholder="DNI" value="<?php echo "DNI: ".$datosAlumno['dni']; ?>" disabled>
				<div class="input-group-append">
					<button class="btn btn-warning" type="button"><i class="fas fa-edit"></i></button>
				</div>
			</div>		
			
			
           	<div class="input-group">
				<input type="num" id="inputAño" class="form-control-dis mb-2" placeholder="Año a Ingresar" value="<?php echo "Año a Ingresar: ".$datosAlumno['año_a_ingresar']. "°"; ?>" disabled>
				<div class="input-group-append">
					<button class="btn btn-warning" type="button"><i class="fas fa-edit"></i></button>
				</div>
			</div>	
            
            <div class="input-group">
				<input type="text" id="inputUsuario" class="form-control-dis mb-2" minlength="8" maxlength="8" placeholder="Dni Tutor" value="<?php echo "Domicilio: ".$datosAlumno['Domicilio']; ?>" disabled>
				<div class="input-group-append">
					<button class="btn btn-warning" type="button"><i class="fas fa-edit"></i></button>
				</div>
			</div>	

		    <div class="input-group">
				<input type="text" id="inputContraseña" class="form-control-dis mb-2" minlength="8" maxlength="8" placeholder="Dni Alumno" value="<?php echo "Escuela_A: ".$datosAlumno['Escuela_A']; ?>" disabled>
				<div class="input-group-append">
					<button class="btn btn-warning" type="button"><i class="fas fa-edit"></i></button>
				</div>
			</div>	
			
			
			
			<a href="hub.php"> <button class="btn btn-lg btn-secondary btn-block" >Volver</button></a>
            </center>
        </div>
	<?php
	mysqli_close($conexion);
		include 'footer.html';
	?>

	
</body>
</html>