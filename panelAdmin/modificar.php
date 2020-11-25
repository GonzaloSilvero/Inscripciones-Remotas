<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../estilos/bootstrap.css" rel="stylesheet">
	<link rel="icon" href="../iconos/isotipo.png">
	<title>Inscripciones Remotas</title>
<link href="../estilos/signin.css" rel="stylesheet">
</head>
<body>		

<header>
<nav class="navbar navbar-expand navbar-dark bg-dark" >
    <a class="navbar-brand" href="#"><i class="fas fa-door-open"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item">
        </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
        </form>
    </div>
</nav>

<?php
	session_start();
    if (!isset($_SESSION["admin"]))
    {
        header("location:../index.php");
    }

    $conexion =mysqli_connect("localhost", "root", "","sorteo");

    $referenciaAlumno = $_REQUEST['id'];

	$resultado_alumno= mysqli_query($conexion, "SELECT * FROM `chicos_i` WHERE `ID` = '$referenciaAlumno' ");
    $datosAlumno= mysqli_fetch_assoc($resultado_alumno);
	?>


	<form class="form-signin" action="logicaModificar.php" method="POST">
            <center>
            <h1 class="h1 mb-3 font-weight-normal">Datos del Alumno</h1>
            Nombre: 
			<input type="text" id="inputNombre" name="nombre_A" class="form-control" placeholder="Nombre: " value="<?php echo $datosAlumno['Nombre']; ?>">
            
            Apellido: 
			<input type="text" id="inputApellido" name="apellido_A"  class="form-control" placeholder="Apellido" value="<?php echo $datosAlumno['Apellido']; ?>">

            Edad: 
			<input type="tel" id="inputTel" name="edad_A"  class="form-control" maxlength="10" placeholder="Telefono" value="<?php echo $datosAlumno['Edad']; ?>">
            
            DNI:
            <input type="num" id="inputDNI" name="dni_A"  class="form-control" placeholder="DNI" value="<?php echo $datosAlumno['dni']; ?>">

            Año a Ingresar:
            <input type="num" id="inputAño" name="ano_A"  class="form-control" placeholder="Año a Ingresar" value="<?php echo $datosAlumno['año_a_ingresar']; ?>" >

            Domicilio:
			<input type="text" id="inputUsuario" name="domicilio_A"  class="form-control" minlength="8" maxlength="8" placeholder="Dni Tutor" value="<?php echo $datosAlumno['Domicilio']; ?>">
            
            Escuela_A:
            <input type="text" id="inputContraseña" name="escAnterior"  class="form-control" minlength="8" maxlength="8" placeholder="Dni Alumno" value="<?php echo $datosAlumno['Escuela_A']; ?>">
            
            <input type="hidden" id="id" name="id" value="<?php echo $referenciaAlumno; ?>" />
			
			<button class="btn btn-lg btn-secondary btn-block" name="ida" type="submit">Modificar</button>
            </center>
</form>  

	
</body>
</html>