<?php

class autorController{


	# ---Registro de usuarios---
	public function ingresarAutorController(){

		if(isset($_POST["autor"])){

			$datosController = array("autor"=>$_POST["autor"]);

			$repuesta = autorDatos::ingresarAutorModel($datosController,"autores");

			if($repuesta=="success"){
				
				header("location:index.php?action=ingresarAutores");

			}
			else{

				header("location:index.php");
			}

		}
	}

	public function vistaAutorController (){

 	    $respuesta = autorDatos::vistaAutorModel("autores");

    # el Constructor foreach es modo mas sencillode iterar sobre arrays y objetos

 	    foreach ($respuesta as $row => $item ){
 	    	echo '<tr>
				<td>'.$item["autor"].'</td>
			
				
				<td><a href="index.php?action=ok3&id_autor='.$item["id_autor"].'"><button>Editar</button></a></td>
				<td><a a href="index.php?action=aldas&id_autorBorrar='.$item["id_autor"].'"><button>Borrar</button></a></td>
			  </tr>'; 

 	    }   

    }    
	
	#esto pertenece a el video de actualizar datos PDO parte 1-----------------------------------
	#EDITAR USUARIOS--------------------------------------

	    public function editarAutorController(){

		$datosController= ($_GET["id_autor"]);
		$respuesta = autorDatos::editarAutorModel($datosController , "autores");

		#esto pertenece a el video de actualizar datos PDO parte 2-----------------------------------
		
		echo '<input type= "hidden" value="'.$respuesta["id_autor"].'" name="idEditar">

		      <label><td>Autor</label><input type="text" value="'.$respuesta["autor"].'" name="autorEditar" required>
		     

		      <input type="submit" value="Actualizar">';

	 } 

	 #ACTUALIZAR USUARIOS----------------------------------------

	    public function actualizarAutorController(){

			if(isset($_POST["autorEditar"])){

				$datosController = array ("id_autor"=>$_POST["idEditar"],
					            "autor"=>$_POST["autorEditar"]);
								
					$respuesta= autorDatos::actualizarAutorModel($datosController, "autores");

                                if ( $respuesta == "success"){

									header("location:index.php?action=aldas");
                            }

                                else {

									echo "error";

   }	
} 	

}
public function borrarAutorController(){

	if(isset($_GET["id_autorBorrar"])){
		$datosController = $_GET["id_autorBorrar"];

$respuesta = autorDatos::borrarAutorModel($datosController,"autores");

if($respuesta == "success"){

			header("location:index.php?action=aldas");


    }
}
}


}






?>



