<?php


require_once "conexion.php";

class autorDatos extends Conexion{

	# Registro de usuarios
	public static function ingresarAutorModel($datosModel,$tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(autor) VALUES(:autor)");

		$stmt->bindParam(":autor", $datosModel["autor"], PDO::PARAM_STR);
		

		
		if($stmt->execute()){

			return "success";
		}
		else{
			
			return "Error";
		}
	}


	 public static function vistaAutorModel ( $tabla){

       $stmt =Conexion::conectar()->prepare("SELECT id_autor, autor FROM $tabla");
       $stmt->execute();

       # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement

	   return $stmt->fetchAll();
	   # esto pertenece alas variables de session dentro de ese video
	   $stmt->close();

  }

   #EDITAR USUARIOS............................................................

    public static function editarAutorModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("SELECT id_autor, autor FROM $tabla WHERE id_autor= :id_autor");
	  $stmt->bindParam(":id_autor", $datosModel,PDO::PARAM_INT);
	  $stmt->execute();
	  # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement
	  return $stmt->fetch();
	  # esto pertenece alas variables de session dentro de ese video
	  $stmt->close();

}
 #ACTUALIZAR USUARIOS............................................................

    public static function actualizarAutorModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("UPDATE $tabla SET autor = :autor  WHERE id_autor= :id_autor");
	   
	  $stmt->bindParam(":autor", $datosModel["autor"], PDO::PARAM_STR);
	  
	  $stmt->bindParam("id_autor", $datosModel["id_autor"], PDO::PARAM_INT);
	 
	 
     if($stmt->execute()){

		return "success";
	}

	  else{
		
		return "Error";
		
	}
	# esto pertenece alas variables de session dentro de ese video
	$stmt->close();
}

public function borrarAutorModel($datosModel, $tabla){


 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_autor= :id_autor");

    $stmt->bindParam(":id_autor", $datosModel, PDO::PARAM_INT);

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



	

	


