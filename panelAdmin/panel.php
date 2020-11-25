<?php
		session_start();
			if (!isset($_SESSION["usuario"])) {
			header("location:index.php");
				}
    $conexion =mysqli_connect("localhost", "root", "","sorteo");
	$seleccion="SELECT * FROM `chicos_i`";
	$resultado = $con->query($seleccion);
	
?>
<!doctype html>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
	
	<body style="background-color: #CED6F4">
		<div class="container">
			<!--<div class="row container text-center">
				<div class="col">
				<h3>Control de alumnos</h3>
				</div>
				<div class="col">
				</div>
				<div class="col text-right">	
				<h3><a href="cerrar_sesion.php"><i class="fas fa-door-open"></i></a></h3>
				</div>
			</div>-->
			
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
							<!-- <th>Modificar</th> -->
							<th>Eliminar</th>
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

								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id_zap']; ?>" data-toggle="modal" data-target="#confirm-delete">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill btn-outline-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 									 <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
									</svg></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialo°°g" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Eliminar Artículo</h5>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este artículo?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						<a class="btn btn-danger btn-ok">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
	<?php mysqli_close($con) ?>
	</body>
</html>

<?php//DELETE FROM `chicos_i` WHERE `chicos_i`.`ID` = 22


//DELETE FROM `tienechicos` WHERE `tienechicos`.`id` = 4
?>