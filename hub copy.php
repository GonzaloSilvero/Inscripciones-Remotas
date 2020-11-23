<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
	<?php include 'head.html';?>
</head>
	<?php
		session_start();
		if (!isset($_SESSION["usuario"])) {
			header("location:index.php");
		}
	?>
<body>
	<h1>Alumnos Registrados</h1>
	<?php

	$conexion =mysqli_connect("localhost", "root", "","sorteo");
	$sesion=$_SESSION['usuario'];
	$consulta="SELECT * FROM `tutor` WHERE `Usuario` = $sesion";
	$resultado1= mysqli_query($conexion, $consulta);
	$resultadot = mysqli_fetch_assoc($resultado1);
	$id_tutor=$resultadot['ID'];
	
	$busqueda="SELECT * FROM `tienechicos` WHERE `id_tutor` = $id_tutor";
	$resultado1= mysqli_query($conexion, $busqueda);

	
	
		echo"<div class='row'>";
		while($resultadot = mysqli_fetch_assoc($resultado1)){
			$id_chico=$resultadot['id_chicos'];
			$seleccion="SELECT * FROM `chicos_i` WHERE `ID` = $id_chico";
			$chico= mysqli_query($conexion, $seleccion);
			$seleccionado = mysqli_fetch_assoc($chico);

			echo"<div class='col-md-4'>";
				echo"<div class='card mb-4 shadow-sm'>";
					echo"<div class='card-body'>";
						echo"<h5 class='card-title'>".$seleccionado['Nombre']." ".$seleccionado['Apellido']."</h5>";
						echo"<p class='card-text'>"."dni: ".$seleccionado['dni']."<br>"."edad: ".$seleccionado['Edad']."</p>";
						echo"<div class='d-flex justify-content-between align-items-center'>";
					echo"<div class='btn-group'>";
					echo"<a href='#' class='btn btn-secondary'>"."Revisar"."</a>";
					echo"</div>";
				echo"</div>";
				echo"</div>";
				echo"</div>";
				echo"</div>";
		}
	echo"</div>";
	
	?>
	<a href="alumno.php"><button  class="btn btn-lg btn-dark btn-block " type="submit" href="alumno.php">Añadir alumno<br></button></a>
</main>



<?php include 'footer.html';?>
</body>
</html>