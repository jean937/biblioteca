 <?php


require_once "conexion.php";

class usuarioDatos extends Conexion{

	# Registro de usuarios
	public static function ingresarUsuarioModel($datosModel,$tabla){

		$stm = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,usuario,password,estado) VALUES(:nombre,:usuario,:password,:estado)");

		$stm->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stm->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

		$stm->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);

		$stm->bindParam(":estado", $datosModel["estado"], PDO::PARAM_STR);

		
		if($stm->execute()){

			return "success";
		}
		else{
			
			return "error";
		}
	}

	 public static function vistaUsuariosModel ( $tabla){

       $stmt =Conexion::conectar()->prepare("SELECT id_usuario,nombre, usuario, password, estado FROM $tabla");
       $stmt->execute();

       # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement

	   return $stmt->fetchAll();
	   # esto pertenece alas variables de session dentro de ese video
	   $stmt->close();

  }

   #EDITAR USUARIOS............................................................

    public static function editarUsuarioModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("SELECT id_usuario,nombre, usuario,password , estado  FROM $tabla WHERE id_usuario= :id_usuario");
	  $stmt->bindParam(":id_usuario", $datosModel,PDO::PARAM_INT);
	  $stmt->execute();
	  # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement
	  return $stmt->fetch();
	  # esto pertenece alas variables de session dentro de ese video
	  $stmt->close();

}
 #ACTUALIZAR USUARIOS............................................................

    public static function actualizarUsuarioModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("UPDATE $tabla SET  nombre = :nombre, usuario = :usuario, password = :password,estado= :estado WHERE id_usuario = :id_usuario");
	  
	  $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
	  $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
	  $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
	  $stmt->bindParam(":estado", $datosModel["estado"], PDO::PARAM_STR);
	   
	  $stmt->bindParam(":id_usuario", $datosModel["id_usuario"], PDO::PARAM_STR);

     if($stmt->execute()){

		return "success";
	}

	  else{
		
		return "Error";
		
	}
	# esto pertenece alas variables de session dentro de ese video
	$stmt->close();
}


        public static function borrarUsuarioModel ($datosModel, $tabla){


 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_usuario= :id_usuario");

    $stmt->bindParam(":id_usuario", $datosModel, PDO::PARAM_INT);

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