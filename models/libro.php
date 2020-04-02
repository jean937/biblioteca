<?php


require_once "conexion.php";

class libroDatos extends Conexion{

	# Registro de usuarios
	public static function ingresarLibroModel($datosModel,$tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_autor,id_categoria,id_editorial,nombre_autor,fecha_lan,idioma,paginas,descripcion) VALUES(:id_autor,:id_categoria,:id_editorial,:nombre_autor,:fecha_lan,:idioma,:paginas,:descripcion)");



		$stmt->bindParam(":id_autor", $datosModel["id_autor"], PDO::PARAM_STR);

		$stmt->bindParam(":id_categoria", $datosModel["id_categoria"], PDO::PARAM_STR);

		$stmt->bindParam(":id_editorial", $datosModel["id_editorial"], PDO::PARAM_STR);

		$stmt->bindParam(":nombre_autor", $datosModel["nombre_autor"], PDO::PARAM_STR);

		$stmt->bindParam(":fecha_lan", $datosModel["fecha_lan"], PDO::PARAM_STR);

		$stmt->bindParam(":idioma", $datosModel["idioma"], PDO::PARAM_STR);


		$stmt->bindParam(":paginas", $datosModel["paginas"], PDO::PARAM_STR);

		$stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
  
  
         

		
if($stmt->execute()){

			return "success";
		}
		else{
			
			return "Error";
		}


		
           
	}
	

public static function vistaLibroModel ( $tabla){

       $stmt =Conexion::conectar()->prepare("SELECT libros.id_libro, libros.id_autor,autores.autor,libros.id_categoria,categorias.categoria,libros.id_editorial,editoriales.editorial,libros.nombre_autor,libros.fecha_lan,libros.idioma,libros.paginas,libros.descripcion FROM libros,autores,categorias,editoriales WHERE libros.id_autor= autores.id_autor AND libros.id_categoria= categorias.id_categoria AND libros.id_editorial= editoriales.id_editorial");
       $stmt->execute();

       # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement

	   return $stmt->fetchAll();
	   # esto pertenece alas variables de session dentro de ese video
	   $stmt->close();

  }

   #EDITAR USUARIOS............................................................

    public static function editarLibroModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("SELECT libros.id_libro, libros.id_autor,autores.autor,libros.id_categoria,categorias.categoria,libros.id_editorial,editoriales.editorial,libros.nombre_autor,libros.fecha_lan,libros.idioma,libros.paginas,libros.descripcion FROM libros,autores,categorias,editoriales WHERE libros.id_libro AND libros.id_categoria= categorias.id_categoria AND libros.id_editorial= editoriales.id_editorial");

	  	  $stmt->bindParam(":id_libro", $datosModel,PDO::PARAM_INT);

	  $stmt->execute();
	  # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement
	  return $stmt->fetch();
	  # esto pertenece alas variables de session dentro de ese video
	  $stmt->close();

}
 #ACTUALIZAR USUARIOS............................................................

    public static function actualizarLibroModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("UPDATE (libros,autores,categorias,editoriales) SET autor = :autor, categoria = :categoria, editoriales = :editorial, nombre_autor = :nombre_autor, fecha_lan= :fecha_lan, idioma= :idioma, paginas= :paginas ,descripcion= :descripcion WHERE id_libro = :id_libro  AND libros.id_categoria= categorias.id_categoria AND libros.id_editorial= editoriales.id_editorial");

	  
 	$stmt->bindParam(":autor", $datosModel["autor"], PDO::PARAM_STR);

		$stmt->bindParam(":categoria", $datosModel["categoria"], PDO::PARAM_STR);

		$stmt->bindParam(":editorial", $datosModel["editorial"], PDO::PARAM_STR);

		$stmt->bindParam(":nombre_autor", $datosModel["nombre_

			autor"], PDO::PARAM_STR);

		$stmt->bindParam(":fecha_lan", $datosModel["fecha_lan"], PDO::PARAM_STR);

		$stmt->bindParam(":idioma", $datosModel["idioma"], PDO::PARAM_STR);


		$stmt->bindParam(":paginas", $datosModel["paginas"], PDO::PARAM_STR);

		$stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
  
		
	   
	  $stmt->bindParam(":id_libro", $datosModel["id_libro"], PDO::PARAM_STR);

     	if($stmt->execute()){

			return "success";
		}
		else{
			
			header("location:index.php?action=pe");
		}
			# esto pertenece alas variables de session dentro de ese video
	
}


        public static function borrarLibroModel ($datosModel, $tabla){


 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_libro= :id_libro");

    $stmt->bindParam(":id_libro", $datosModel, PDO::PARAM_INT);

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



	

	



