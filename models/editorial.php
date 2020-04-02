 <?php


require_once "conexion.php";

class editorialDatos extends Conexion{

	# Registro de usuarios
	public static function ingresarEditorialModel($datosModel,$tabla){

       $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(editorial) VALUES(:editorial)");

		$stmt->bindParam(":editorial", $datosModel["editorial"], PDO::PARAM_STR);
		
		if($stmt->execute()){

			return "success";
		}
		else{
			
			return "error";
		}
	}
	
	
 public static function vistaEditorialModel ( $tabla){

       $stmt =Conexion::conectar()->prepare("SELECT id_editorial,editorial FROM $tabla");
       $stmt->execute();

       # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement

	   return $stmt->fetchAll();
	   # esto pertenece alas variables de session dentro de ese video
	   $stmt->close();

  }

   #EDITAR USUARIOS............................................................

    public function editarEditorialModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("SELECT id_editorial,editorial FROM $tabla WHERE id_editorial= :id_editorial");
	  $stmt->bindParam(":id_editorial", $datosModel,PDO::PARAM_INT);
	  $stmt->execute();
	  # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement
	  return $stmt->fetch();
	  # esto pertenece alas variables de session dentro de ese video
	  $stmt->close();

}
 #ACTUALIZAR USUARIOS............................................................

    public function actualizarEditorialModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("UPDATE $tabla SET editorial = :editorial  WHERE id_editorial= :id_editorial");
	  
	  $stmt->bindParam(":editorial", $datosModel["editorial"], PDO::PARAM_STR);
	 
	  $stmt->bindParam(":id_editorial", $datosModel["id_editorial"], PDO::PARAM_STR);

     if($stmt->execute()){

		return "success";
	}

	  else{
		
		return "Error";
		
	}
	# esto pertenece alas variables de session dentro de ese video
	$stmt->close();
}


        public function borrarEditorialModel ($datosModel, $tabla){


 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_editorial= :id_editorial");

    $stmt->bindParam(":id_editorial", $datosModel, PDO::PARAM_INT);

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






