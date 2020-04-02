<?php


class lectorController{

	# ---Registro de usuarios---
	public function ingresarLectorController(){

		if(isset($_POST["nombres"])){

			$datosController = array("nombres"=>$_POST["nombres"],
	    		                     "telefono"=>$_POST["telefono"],
		    						"direccion"=>$_POST["direccion"],
		    						"codigo_postal"=>$_POST["codigo_postal"]);

			$repuesta = lectorDatos::ingresarLectorModel($datosController,"lectores");


			if($repuesta=="success"){
				
				header("location:index.php?action=ingresarlect");

			}
			else{

				header("location:index.php");
			}

		}
	}
	 public function vistaLectorController (){

 	    $respuesta = lectorDatos::vistaLectorModel("lectores");

    # el Constructor foreach es modo mas sencillode iterar sobre arrays y objetos

 	    foreach ($respuesta as $row => $item ){
 	    	echo '<tr>
 	    	    <td>'.$item["nombres"].'</td>
				<td>'.$item["telefono"].'</td>
				<td>'.$item["direccion"].'</td>
				<td>'.$item["codigo_postal"].'</td>
				
				
<td><a href="index.php?action=ok4&id_lector='.$item["id_lector"].'"><button>Editar</button></a></td>

<td><a href="index.php?action=je&id_lectorBorrar='.$item["id_lector"].'"><button>Borrar</button></a></td>
			  </tr>'; 

 	    }   

    }    
	
	#esto pertenece a el video de actualizar datos PDO parte 1-----------------------------------
	#EDITAR USUARIOS--------------------------------------

	    public function editarLectorController(){

		 $datosController= ($_GET["id_lector"]);
		$respuesta = lectorDatos::editarLectorModel($datosController , "lectores");

		#esto pertenece a el video de actualizar datos PDO parte 2-----------------------------------


		
		echo '<input type= "hidden" value="'.$respuesta["id_lector"].'" name="idEditar">

		      <label><td>Nombres</label><input type="text" value="'.$respuesta["nombres"].'" name="nombresEditar" required>

		       <label><td>telefono</label><input type="text" value="'.$respuesta["telefono"].'" name="telefonoEditar" required>

		       <label><td>Direccion</label><input type="text" value="'.$respuesta["direccion"].'" name="direccionEditar" required>

		   <label><td>Codigo_postal</label><input type="text" value="'.$respuesta["codigo_postal"].'" name="codigo_postalEditar" required>
	
		       

		       <input type="submit" value="Actualizar">';

	 } 

	 #ACTUALIZAR USUARIOS----------------------------------------

	    public function actualizarLectorController(){

			if(isset($_POST["nombresEditar"])){

				$datosController = array ("id_lector"=>$_POST["idEditar"],
					             "nombres"=>$_POST["nombresEditar"],
					            "telefono"=>$_POST["telefonoEditar"],
					            "cedula"=>$_POST["cedulaEditar"],
					            "direccion"=>$_POST["direccionEditar"],
					            "codigo_postal"=>$_POST["codigo_postalEditar"]);
								
	$respuesta= lectorDatos::actualizarLectorModel($datosController, "lectores");

                                if ( $respuesta == "success"){

									header("location:index.php?action=je");
                            }

                                else {

									echo "error";

   } 	
} 	
}


     public function borrarLectorController(){
 
	if(isset($_GET["id_lectorBorrar"])){
		$datosController = $_GET["id_lectorBorrar"];

$respuesta = lectorDatos::borrarLectorModel($datosController,"lectores");

if($respuesta == "success"){

			header("location:index.php?action=je");
  }	
 }

} 
}


?>


