 
 <?php

 class editorialController{

	# ---Registro de usuarios---
	public function ingresarEditorialController(){

		if(isset($_POST["editorial"])){

			$datosController = array("editorial"=>$_POST["editorial"]);

			$respuesta =editorialDatos::ingresarEditorialModel($datosController,"editoriales");


			if($repuesta=="success"){
				
				header("location:index.php?action=ingresareditor");

			}
			else{

				header("location:index.php?action=ingresareditor");
			}

		}
	}
	

	  public function vistaEditorialController (){

 	    $respuesta =editorialDatos::vistaEditorialModel("editoriales");

    # el Constructor foreach es modo mas sencillode iterar sobre arrays y objetos

 	    foreach ($respuesta as $row => $item ){
 	    	echo '<tr>
 	    	    <td>'.$item["editorial"].'</td>
				
				<td><a href="index.php?action=ok8&id_editorial='.$item["id_editorial"].'"><button>Editar</button></a></td>

				<td><a a href="index.php?action=you&id_editorialBorrar='.$item["id_editorial"].'"><button>Borrar</button></a></td>
			  </tr>'; 

 	    }   

    }    
	
	#esto pertenece a el video de actualizar datos PDO parte 1-----------------------------------
	#EDITAR USUARIOS--------------------------------------

	    public function editarEditorialController(){

		 $datosController= ($_GET["id_editorial"]);
		$respuesta =editorialDatos::editarEditorialModel($datosController , "editoriales");

		#esto pertenece a el video de actualizar datos PDO parte 2-----------------------------------
		
		echo '<input type= "hidden" value="'.$respuesta["id_editorial"].'" name="idEditar">

		<label><td>Editorial</label><input type="text" value="'.$respuesta["editorial"].'" name="editorialEditar" required>


		     
	            

		      <input type="submit" value="Actualizar">';

	 } 

	 #ACTUALIZAR USUARIOS----------------------------------------

	    public function actualizarEditorialController(){

			if(isset($_POST["editorialEditar"])){

				$datosController = array ("id_editorial"=>$_POST["idEditar"],
					            "editorial"=>$_POST["editorialEditar"]);
								
								$respuesta=editorialDatos::actualizarEditorialModel($datosController, "editoriales");

                                if ( $respuesta == "success"){

									header("location:index.php?action=you");
                            }

                                else {

									echo "error";

   } 	
} 	
}


     public function borrarEditorialController(){
 
	if(isset($_GET["id_editorialBorrar"])){
		$datosController = $_GET["id_editorialBorrar"];

$respuesta = editorialDatos::borrarEditorialModel($datosController,"editoriales");

if($respuesta == "success"){

			header("location:index.php?action=you");
  }	
 }

} 
}


?>

