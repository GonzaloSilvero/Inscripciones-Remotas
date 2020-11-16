<?php

 require_once'conexion.php';
  //
  session_start();
 if (isset($_POST['submit'])) {

 	//Recoger los valores del formulario de registro
   	$Nombre_T= isset($_POST['nombre_T']) ? $_POST ['nombre_T']: false;
   	$apellido_T= isset($_POST['apellido_T']) ? $_POST ['apellido_T']: false;
   	$Email_T= isset($_POST['email_T']) ? $_POST ['Email_T']: false;
   	$Usuario_T= isset($_POST['usuario_T']) ? $_POST ['Usuario_T']: false;
   	$password_T= isset($_POST['contrasena_T']) ? $_POST ['contrasena_T']: false;

   	//Array de errores
    $errores= array();


   	//Validar los datos antes de guardarlos en la base de datos
   	//Validar campo nombre
    if (!empty($Nombre_T) && !is_numeric($Nombre_T) && !preg_match("/[0-9]/", $Nombre_T)) {
    	$Nombre_T_valido=true;
    }else{
        $Nombre_valido=false;
        $errores['Nombre_T']="El Nombre no es valido";
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
    if (!empty($password_T)){

    	$password_T_valido=true;

    }else{

        $password_T_valido=false;
        $errores['password_T']="La contraseña no es valido";
     }

    $guardar_usuario= false;

    if (count($errores) == 0) {
    	$guardar_usuario = true;

        //cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4])

    	//insertar usuarion en la base de datos
    	$sql = "INSERT INTO usuarios VALUES () "
    	$guardar = mysql_query($db, $)
    }else{
    	$_SESSION['errores']=$errores;
    	header('Location: tutor.php');
    }
 }
?>

<div>
	Su registro se a efectuado
</div>

<a href="index.php"> volver a el inicio</a>

</html>