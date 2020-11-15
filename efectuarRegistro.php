<?php
 if (isset($_POST['submit'])) {

 	//Recoger los valores del formulario de registro
   	$nombre_T= isset($_POST['nombre_T']) ? $_POST ['nombre_T']: false;
   	$apellido_T;= isset($_POST['apellido_T']) ? $_POST ['apellido_T']: false;
   	$Email_T;= isset($_POST['email_T']) ? $_POST ['Email_T']: false;
   	$Usuario_T;= isset($_POST['usuario_T']) ? $_POST ['Usuario_T']: false;
   	$contrasena_T;= isset($_POST['contrasena_T']) ? $_POST ['contrasena_T']: false;

   	//Validar los datos antes de guardarlos en la base de datos
   	//Validar campo nombre
    if (!empty($nombre)&& !is_numeric($nombre)&& !preg_match("//[0-9]/", $nombre)) {
    	echo "el nombre es valido";
    }else{

    }

   	//Validar campo Apellido
   	//Validar campo Telefono
    //Validar campo Gmail
    //Validar campo usuario
    //Validar campo contraseña

   	var_dump($_POST);
  }
?>

<div>
	Su registro se a efectuado
</div>

<a href="indexf.php"> volver a el inicio</a>

</html>