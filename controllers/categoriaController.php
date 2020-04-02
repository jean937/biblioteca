<?php

class categoriaController{


	# ---Registro de usuarios---
	public function ingresarCategoriaController(){

		if(isset($_POST["categoria"])){

			$datosController = array("categoria"=>$_POST["categoria"]);

			$repuesta = categoriaDatos::ingresarCategoriaModel($datosController,"categorias");

			if($repuesta=="success"){
				
				header("location:index.php?action=ingresarCategoria");

			}
			else{

				header("location:index.php");
			}

		}
	}
		public function vistaCategoriaController (){

 	    $respuesta = categoriaDatos::vistaCategoriaModel("categorias");

    # el Constructor foreach es modo mas sencillode iterar sobre arrays y objetos

 	    foreach ($respuesta as $row => $item ){
 	    	echo '<tr>
				<td>'.$item["categoria"].'</td>
			
				
				<td><a href="index.php?action=ok2&id_categoria='.$item["id_categoria"].'"><button>Editar</button></a></td>
				<td><a href="index.php?action=cambio&id_categoriaBorrar='.$item["id_categoria"].'"><button>Borrar</button></a></td>
			  </tr>'; 

 	    }   

    }    
	
	#esto pertenece a el video de actualizar datos PDO parte 1-----------------------------------
	#EDITAR USUARIOS--------------------------------------

	    public function editarCategoriaController(){

		$datosController= ($_GET["id_categoria"]);
		$respuesta = categoriaDatos::editarCategoriaModel($datosController , "categorias");

		#esto pertenece a el video de actualizar datos PDO parte 2-----------------------------------
		
		echo
		 '<input type= "hidden" value="'.$respuesta["id_categoria"].'" name="idEditar">

		      <label><td>Categoria</label><input type="text" value="'.$respuesta["categoria"].'" name="categoriaEditar" required>
		      
		        

		      <input type="submit" value="Actualizar">';

	 } 

	 #ACTUALIZAR USUARIOS----------------------------------------

	    public function actualizarCategoriaController(){

			if(isset($_POST["categoriaEditar"])){

				$datosController = array ("id_categoria"=>$_POST["idEditar"],
					            "categoria"=>$_POST["categoriaEditar"]);
								
					$respuesta= categoriaDatos::actualizarCategoriaModel($datosController, "categorias");

                                if ( $respuesta == "success"){

									header("location:index.php?action=cambio");
                            }

                                else {

									echo "error";

   }	
} 	

}
public function borrarCategoriaController(){

	if(isset($_GET["id_categoriaBorrar"])){
		$datosController = $_GET["id_categoriaBorrar"];

$respuesta = categoriaDatos::borrarCategoriaModel($datosController,"categorias");

if($respuesta == "success"){

			header("location:index.php?action=cambio");


    }
}
}


}






?>