<?php 
$id = $_POST["nid"];
$valor = $_POST["val"];
$conexion = new mysqli("92.249.44.52", "u761283263_eest14", "Sorteo14","u761283263_sorteo");

    $sql = "UPDATE chicos_i SET solicitud = $valor WHERE id = $id";
    $resultado= mysqli_query($conexion, $sql);

echo "La consulta que se hizo fue: $sql";
?>