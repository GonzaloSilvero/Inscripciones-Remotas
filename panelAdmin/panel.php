<?php
	session_start();
	if (!isset($_SESSION["admin"])) {
		header("location:../index.php");
	}
    $conexion =mysqli_connect("localhost", "root", "","sorteo");
	$seleccion="SELECT * FROM `chicos_i`";
	$resultado = $conexion->query($seleccion);
	
?>
<!doctype html>
<html lang="es">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../estilos/bootstrap.css" rel="stylesheet">		 
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>

<script type="text/javascript" src="DataTables/datatables.min.js"></script>

<script>
	$(document).ready(function(){
		$('#mitabla').DataTable({
			"order": [[1, "asc"]],
			"language":{
				"lengthMenu": "Mostrar _MENU_ registros por pagina",
				"info": "Mostrando pagina _PAGE_ de _PAGES_",
				"infoEmpty": "No hay registros disponibles",
				"infoFiltered": "(filtrada de _MAX_ registros)",
				"loadingRecords": "Cargando...",
				"processing":     "Procesando...",
				"search": "Buscar:",
				"zeroRecords":    "No se encontraron registros coincidentes",
				"paginate": {
					"next":       "Siguiente",
					"previous":   "Anterior"
				},					
			}
		});	
	});	
</script>
	</head>
	<body style="background-color: #d2d9df">
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
</header>
			<div class="row table-responsive">
				<table class="display" id="mitabla">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
                            <th>Edad</th>
							<th>Dni</th>
							<th>Domicilio</th>
							<th>Escuela Anterior</th>
							<th>Modificar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
							?>
							<tr>
								<td><?php echo $row['Nombre']; ?></td>
								<td><?php echo $row['Apellido']; ?></td>
								<td><?php echo $row['Edad']; ?></td>
								<td><?php echo $row['dni']; ?></td>
							
								<td><?php echo $row['Domicilio'] ?> </td>
								<td><?php echo $row['Escuela_A']; ?></td>	

								<td><a href="modificar.php?id=<?php echo $row['ID']; ?>"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg%22%3E">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

		
	<?php mysqli_close($conexion) ?>
	</body>
</html>

<?php//DELETE FROM `chicos_i` WHERE `chicos_i`.`ID` = 22


//DELETE FROM `tienechicos` WHERE `tienechicos`.`id` = 4
?>