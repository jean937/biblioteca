
<?php


require_once "conexion.php";

class alquilerDatos extends Conexion{

	# Registro de usuarios
	public static function ingresarAlquilerModel($datosModel,$tabla){

$stm = Conexion::conectar()->prepare("INSERT INTO $tabla(id_lector,id_libro,fecha_salida,fecha_entrada) VALUES(:id_lector,:id_libro,:fecha_salida,:fecha_entrada)");

		$stm->bindParam(":id_lector", $datosModel["id_lector"], PDO::PARAM_STR);
		
       $stm->bindParam(":id_libro", $datosModel["id_libro"], PDO::PARAM_STR);

		$stm->bindParam(":fecha_salida", $datosModel["fecha_salida"], PDO::PARAM_STR);

		$stm->bindParam(":fecha_entrada", $datosModel["fecha_entrada"], PDO::PARAM_STR);



		
		if($stm->execute()){

			return "success";
		}
		else{
			
			return "Error";
		}
	}
 public static function vistaAlquilerModel ( $tabla){

       $stmt =Conexion::conectar()->prepare("SELECT alquileres.id_alquiler,alquileres.id_lector,lectores.nombres,alquileres.id_libro,libros.nombre_autor, alquileres.fecha_salida,alquileres.fecha_entrada FROM alquileres,lectores,libros  WHERE alquileres.id_lector= lectores.id_lector AND alquileres.id_libro= libros.id_libro");
       $stmt->execute();

       # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement

	   return $stmt->fetchAll();
	   # esto pertenece alas variables de session dentro de ese video
	   $stmt->close();

  }

   #EDITAR USUARIOS............................................................

    public function editarAlquilerModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("SELECT alquileres.id_alquiler,alquileres.id_lector,lectores.nombres,alquileres.id_libro,libros.nombre_autor, alquileres.fecha_salida,alquileres.fecha_entrada FROM alquileres,lectores, libros WHERE id_alquiler= :id_alquiler AND alquileres.id_lector= lectores.id_lector AND alquileres.id_libro= libros.id_libro"); 

	  $stmt->bindParam(":id_alquiler", $datosModel,PDO::PARAM_INT);
	  $stmt->execute();


       $stmt->execute();
	  # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement
	  return $stmt->fetch();
	  # esto pertenece alas variables de session dentro de ese video
	  $stmt->close();

}
 #ACTUALIZAR USUARIOS............................................................

    public function actualizarAlquilerModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("UPDATE (alquileres,lectores,libros) SET nombres=:nombres, nombre_autor=:nombre_autor,fecha_salida = :fecha_salida, fecha_entrada = :fecha_entrada WHERE id_alquiler= :id_alquiler libros.idioma AND alquileres.id_lector= lectores.id_lector AND alquileres.id_libro= libros.id_libro"); 


	  
	  $stmt->bindParam(":nombres", $datosModel["nombres"], PDO::PARAM_STR);

	  $stmt->bindParam(":nombre_autor", $datosModel["nombre_autor"], PDO::PARAM_STR);

	  $stmt->bindParam(":fecha_salida", $datosModel["fecha_salida"], PDO::PARAM_STR);

	  $stmt->bindParam(":fecha_entrada", $datosModel["fecha_entrada"], PDO::PARAM_STR);
	 
	 
	  $stmt->bindParam(":id_alquiler", $datosModel["id_alquiler"], PDO::PARAM_STR);

     if($stmt->execute()){

		return "success";
	}

	  else{
		
		 header("location:index.php?action=ya");
		
	}
	# esto pertenece alas variables de session dentro de ese video
	$stmt->close();
}


        public function borrarAlquilerModel ($datosModel, $tabla){


 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_alquiler= :id_alquiler");

    $stmt->bindParam(":id_alquiler", $datosModel, PDO::PARAM_INT);

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
