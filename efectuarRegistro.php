<?php
 

 class registro
 {
	private $conexion;
	function __construct()
    {
    	$this->conexion =mysqli_connect("localhost", "root", "","autosprofes");
	}

	//Validar los datos antes de guardarlos en la base de datos
	public function validaciones()
	{
		//Validar campo nombre
		if (!empty($nombre_T)&& !is_numeric($nombre)&& !preg_match("//[0-9]/", $nombre_T)) {
			$nombre_T_valido=true;
		}else{
			$nombre_valido=false;
			$errores['nombre_T']="El nombre no es valido";
		}

		   //Validar campo Apellido
		if (!empty($apellido_T)&& !is_numeric($apellido_T)&& !preg_match("//[0-9]/", $apellido_T)) {
			$nombre_T_valido=true;
		}else{
			$apellido_T_valido=false;
			$errores['apellido_T']="El Apellido no es valido";
		}

		//Validar campo Telefono
		if (!empty($telefono_T) && !is_string($telefono_T)) {
			$telefono_T_valido=true;
		}else{
			$telefono_T_valido=false;
			$errores['telefono_T']="El telefono no es valido";
		}
	}
 }
   	
   	
    
   	
    //Validar campo Gmail
    //Validar campo usuario
    //Validar campo contraseña

   	var_dump($_POST);
  }
?>