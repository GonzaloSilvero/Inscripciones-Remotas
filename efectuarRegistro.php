<?php
 if (isset($_POST['submit'])) {

 	//Recoger los valores del formulario de registro
   	$nombre_T= isset($_POST['nombre_T']) ? $_POST ['nombre_T']: false;
   	$apellido_T;= isset($_POST['apellido_T']) ? $_POST ['apellido_T']: false;
   	$Email_T;= isset($_POST['email_T']) ? $_POST ['Email_T']: false;
   	$Usuario_T;= isset($_POST['usuario_T']) ? $_POST ['Usuario_T']: false;
   	$contrasena_T;= isset($_POST['contrasena_T']) ? $_POST ['contrasena_T']: false;

   	//Array de errores
    $errores= array();

 }
   	//Validar los datos antes de guardarlos en la base de datos
   	//Validar campo nombre
    if (!empty($nombre_T)&& !is_numeric($nombre)&& !preg_match("//[0-9]/", $nombre_T)) {
    	$nombre_T_valido=true;
    }else{
        $nombre_valido=false;
        $errores['nombre_T']="El nombre no es valido";
    }

   	//Validar campo Apellido
   	if (!empty($apellido_T)&& !is_numeric($apellido_T)&& !preg_match("//[0-9]/", $apellido_T)) {
    	$apellido_T_valido=true;
    }else{
        $apellido_T_valido=false;
        $errores['apellido_T']="El Apellido no es valido";
    }
   	//Validar campo Telefono

    //Validar campo Gmail
    if (!empty($email_T) && filter_var($Email_T, FILTER_VALIDATE_EMAIL))  {
    	$email_T_valido=true;
    }else{
        $email_T_valido=false;
        $errores['email_T']="El email no es valido";
    }
    //Validar campo usuario

    //Validar campo contraseña
    if (!empty($contrasena_T)){

    	$contrasena_T_valido=true;

    }else{

        $contrasena_T_valido=false;
        $errores['contrasena_T']="El contraseña no es valido";
     }

    $guardar_usuario= false;

    if (count($errores) == 0) {
    	$guardar_usuario= true;


    	//insertar usuarion en la base de datos
    }

?>

<div>
	Su registro se a efectuado
</div>

<a href="indexf.php"> volver a el inicio</a>

</html>