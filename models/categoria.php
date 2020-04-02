<?php


require_once "conexion.php";

class categoriaDatos extends Conexion{

	# Registro de usuarios
	public  function ingresarCategoriaModel($datosModel,$tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(categoria) VALUES(:categoria )");

		$stmt->bindParam(":categoria", $datosModel["categoria"], PDO::PARAM_STR);
		
		
		if($stmt->execute()){

			return "success";
		}
		else{
			
			return "Error";
		}
	}

    public  function vistaCategoriaModel ( $tabla){

  $stmt =Conexion::conectar()->prepare("SELECT id_categoria, categoria FROM $tabla");
       $stmt->execute();

       # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement

	   return $stmt->fetchAll();
	   # esto pertenece alas variables de session dentro de ese video
	   $stmt->close();

  }

   #EDITAR USUARIOS............................................................

    public static function editarCategoriaModel ($datosModel, $tabla){
    	$stmt =Conexion::conectar()->prepare("SELECT id_categoria, categoria FROM $tabla WHERE id_categoria= :id_categoria");
	  

	  $stmt->bindParam(":id_categoria", $datosModel,PDO::PARAM_INT);
	  $stmt->execute();
	  # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement
	  return $stmt->fetch();
	  # esto pertenece alas variables de session dentro de ese video
	  $stmt->close();

}
 #ACTUALIZAR USUARIOS............................................................

    public static function actualizarCategoriaModel ($datosModel, $tabla){

	   $stmt =Conexion::conectar()->prepare("UPDATE $tabla SET categoria = :categoria  WHERE id_categoria= :id_categoria");
	   
	  $stmt->bindParam(":categoria", $datosModel["categoria"], PDO::PARAM_STR);
	 
	  $stmt->bindParam("id_categoria", $datosModel["id_categoria"], PDO::PARAM_INT);
	 
	 
     if($stmt->execute()){

		return "success";
	}

	  else{
		
		return "Error";
		
	}
	# esto pertenece alas variables de session dentro de ese video
	$stmt->close();
}

public function borrarCategoriaModel($datosModel, $tabla){


 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_categoria = :id_categoria");

    $stmt->bindParam(":id_categoria", $datosModel, PDO::PARAM_INT);

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



	



	

