 <?php


require_once "conexion.php";

class lectorDatos extends Conexion{

	# Registro de usuarios
	public static function ingresarLectorModel($datosModel,$tabla){

		$stm = Conexion::conectar()->prepare("INSERT INTO $tabla(nombres,telefono,direccion,codigo_postal) VALUES(:nombres,:telefono,:direccion,:codigo_postal)");

		$stm->bindParam(":nombres", $datosModel["nombres"], PDO::PARAM_STR);
		$stm->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
		$stm->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);

		$stm->bindParam(":codigo_postal", $datosModel["codigo_postal"], PDO::PARAM_STR);

       

		
		if($stm->execute()){

			return "success";
		}
		else{
			
			return "error";
		}
	}


	 public static function vistaLectorModel ( $tabla){

       $stmt =Conexion::conectar()->prepare("SELECT id_lector,nombres,telefono,direccion,codigo_postal FROM $tabla");
       $stmt->execute();

       # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement

	   return $stmt->fetchAll();
	   # esto pertenece alas variables de session dentro de ese video
	   $stmt->close();

  }

   #EDITAR USUARIOS............................................................

    public static function editarLectorModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("SELECT id_lector, nombres, telefono, direccion, codigo_postal  FROM $tabla WHERE id_lector= :id_lector");
	  $stmt->bindParam(":id_lector", $datosModel,PDO::PARAM_INT);
	  $stmt->execute();
	  # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement
	  return $stmt->fetch();
	  # esto pertenece alas variables de session dentro de ese video
	  $stmt->close();

}
 #ACTUALIZAR USUARIOS............................................................

    public static function actualizarLectorModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("UPDATE $tabla SET nombres = :nombres, telefono = :telefono, direccion = :direccion, codigo_postal = :codigo_postal WHERE id_lector = :id_lector");
	  
	  $stmt->bindParam(":nombres", $datosModel["nombres"], PDO::PARAM_STR);
	  $stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
	    $stmt->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
	      $stmt->bindParam(":codigo_postal", $datosModel["codigo_postal"], PDO::PARAM_STR);
	 
	  
	   
	  $stmt->bindParam(":id_lector", $datosModel["id_lector"], PDO::PARAM_STR);

     if($stmt->execute()){

		return "success";
	}

	  else{
		
		return "Error";
		
	}
	# esto pertenece alas variables de session dentro de ese video
	$stmt->close();
}


        public static function borrarLectorModel ($datosModel, $tabla){


 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_lector= :id_lector");

    $stmt->bindParam(":id_lector", $datosModel, PDO::PARAM_INT);

    if($stmt->execute()){

			return "success";
		}
		else{
			
			return "Error";
		}

		$stmt -> close();

	

}



}




?>

	




