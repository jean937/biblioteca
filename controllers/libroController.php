<?php

class libroController{


	


	# ---Registro de usuarios---
	public function ingresarLibroController(){

		if(isset($_POST["id_autor"])){

			$datosController = array("id_autor"=>$_POST["id_autor"],

									"id_categoria"=>$_POST["id_categoria"],

									"id_editorial"=>$_POST["id_editorial"],

									"nombre_autor"=>$_POST["nombre_autor"],

									"fecha_lan"=>$_POST["fecha_lan"],

									"idioma"=>$_POST["idioma"],

								     "paginas"=>$_POST["paginas"],
								     "descripcion"=>$_POST["descripcion"]);

			$repuesta = libroDatos::ingresarLibroModel($datosController,"libros");

			if($repuesta=="success"){
				
				header("location:index.php?action=ingresarPreguntas");

			}
			else{

				header("location:index.php");
			}

		}
	
}

	
public function vistaLibroController (){

 	    $respuesta = libroDatos::vistaLibroModel("libros");

    # el Constructor foreach es modo mas sencillode iterar sobre arrays y objetos

 	    foreach ($respuesta as $row => $item ){
 	    	echo '<tr>
 	    	    <td>'.$item["autor"].'</td>
				<td>'.$item["categoria"].'</td>
				<td>'.$item["editorial"].'</td>
				<td>'.$item["nombre_autor"].'</td>
				<td>'.$item["fecha_lan"].'</td>
				<td>'.$item["idioma"].'</td>
				<td>'.$item["paginas"].'</td>
				<td>'.$item["descripcion"].'</td>
			
				
<td><a href="index.php?action=ok5&id_libro='.$item["id_libro"].'"><button>Editar</button></a></td>

<td><a href="index.php?action=pe&id_libroBorrar='.$item["id_libro"].'"><button>Borrar</button></a></td>

			  </tr>'; 

 	    }   

    }    
	
	#esto pertenece a el video de actualizar datos PDO parte 1-----------------------------------
	#EDITAR USUARIOS--------------------------------------

	    public function editarLibroController(){

		 $datosController= ($_GET["id_libro"]);
		$respuesta = libroDatos::editarLibroModel($datosController , "libros");

		#esto pertenece a el video de actualizar datos PDO parte 2-----------------------------------
		
		echo '<input type= "hidden" value="'.$respuesta["id_libro"].'" name="idEditar">

          <label><td>Autor</label><input type="text" value="'.$respuesta["autor"].'" name="autorEditar" required>

             <label><td>Categoria</label><input type="text" value="'.$respuesta["categoria"].'" name="categoriaEditar" required>

		      <label><td>Editorial</label><input type="text" value="'.$respuesta["editorial"].'" name="editorialEditar" required>

		     <label><td></label><input type="text" value="'.$respuesta["nombre_autor"].'" name="nombre_autorEditar" required>
	
		      <label><td>Fecha_lan</label><input type="text" value="'.$respuesta["fecha_lan"].'" name="fecha_lanEditar" required>

		      <label><td>Idioma</label><input type="tex" value="'.$respuesta["idioma"].'" name="idiomaEditar" required>

             <label><td>Paginas</label><input type="tex" value="'.$respuesta["paginas"].'" name="paginasEditar" required>

              <label><td>Descripcion</label><input type="tex" value="'.$respuesta["descripcion"].'" name="descripcionEditar" required>




		       

		   



		      <input type="submit" value="Actualizar">';

	 } 

	 #ACTUALIZAR USUARIOS----------------------------------------

	    public function actualizarLibroController(){

			if(isset($_POST["autorEditar"])){

				$datosController = array ("id_libro"=>$_POST["idEditar"],
					             "autor"=>$_POST["autorEditar"],
					            "categoria"=>$_POST["categoriaEditar"],
					            "editorial"=>$_POST["editorialEditar"],
					            "nombre_autor"=>$_POST["nombre_autorEditar"],
					            "fecha_lan"=>$_POST["fecha_lanEditar"],
					             "idioma"=>$_POST["idiomaEditar"],
					              "paginas"=>$_POST["paginasEditar"],
					           "descripcion"=>$_POST["descripcionEditar"]);

				$respuesta= libroDatos::actualizarLibroModel($datosController, "libros");

                                if ( $respuesta == "success"){

									header("location:index.php?action=pe");
                            }

                                else {

									echo "error";

   } 	
} 	
}


     public function borrarLibroController(){
 
	if(isset($_GET["id_libroBorrar"])){
		$datosController = $_GET["id_libroBorrar"];

$respuesta = libroDatos::borrarLibroModel($datosController,"libros");

if($respuesta == "success"){

			header("location:index.php?action=pe");
  }	
 }

} 


}
  ?>










