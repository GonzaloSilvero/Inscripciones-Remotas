<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
	<?php include 'head.html';?>
</head>
	<?php
		/*session_start();
		if (!isset($_SESSION["usuario"])) {
			header("location:index.php");
		}*/
	?>
<body>
	<h1>Alumnos Registrados</h1>

    <div class="row">
        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="#" class="btn btn-secondary">Go somewhere</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="#" class="btn btn-secondary">Go somewhere</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="#" class="btn btn-secondary">Go somewhere</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="#" class="btn btn-secondary">Go somewhere</a>
                </div>
            </div>
            </div>
        </div>
        </div>
	</div>
	<a href="alumno.php"><button  class="btn btn-lg btn-dark btn-block " type="submit" href="alumno.php">Añadir alumno<br></button></a>
</main>



<?php include 'footer.html';?>
</body>
</html>