<!DOCTYPE html>
<html>
<?php include 'head.html';?>
<title>Registro</title>
<link href="estilos/signin.css" rel="stylesheet">
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

    echo $datosAlumno['Nombre'];
    echo "<br>";
    echo $datosAlumno['Apellido'];
    echo "<br>";
    echo $datosAlumno['Edad'];
    echo "<br>";
    echo $datosAlumno['dni'];
    echo "<br>";
    echo $datosAlumno['Domicilio'];
    echo "<br>";
    echo $datosAlumno['Escuela_A'];
    

    mysqli_close($conexion);
        
	include 'footer.html';
	?>

	
</body>
</html>