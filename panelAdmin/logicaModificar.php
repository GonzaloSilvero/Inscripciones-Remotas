<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:index.php");
}

if (isset($_POST['ida'])) {			
    $conexion =mysqli_connect("localhost", "root", "","sorteo");

    //Recoger los valores del formulario de registro
    $nombre_A= $_POST['nombre_A'];
    $apellido_A= $_POST['apellido_A'];
    $edad_A= $_POST['edad_A'];
    $dni_A= $_POST['dni_A'];
    $ano_A= $_POST['ano_A'];
    $domicilio_A= $_POST['domicilio_A'];
    $escuelaAnt= $_POST['escAnterior'];
    $referenciaAlumno= $_POST['id'];

    $consulta="UPDATE chicos_i SET Nombre = '$nombre_A', Apellido = '$apellido_A', Edad = '$edad_A', Domicilio = '$domicilio_A', Escuela_A = '$escuelaAnt', dni = '$dni_A', año_a_ingresar= '$ano_A' WHERE ID = '$referenciaAlumno'";
	$resultado= mysqli_query($conexion, $consulta);

    mysqli_close($conexion);

    header("location: panel.php");
}
    //include 'footer.html';
	?>