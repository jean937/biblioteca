<?php

class alquilerController{


	


	# ---Registro de usuarios---
	public function ingresarAlquilerController(){

		if(isset($_POST["id_lector"])){

			$datosController = array("id_lector"=>$_POST["id_lector"],
									    "id_libro"=>$_POST["id_libro"],
				                    "fecha_salida"=>$_POST["fecha_salida"],
								     "fecha_entrada"=>$_POST["fecha_entrada"]);


			$repuesta = alquilerDatos::ingresarAlquilerModel($datosController,"alquileres");

			if($repuesta=="success"){
				
				header("location:index.php?action=ingresarHabilitar");

			}
			else{

				header("location:index.php");
			}

		}
	}



	public function vistaAlquilerController (){

 	    $respuesta = alquilerDatos::vistaAlquilerModel("alquileres");

             foreach ($respuesta as $row => $item ){
 	    	echo '<tr>
 	    	    <td>'.$item["nombres"].'</td>

 	    	    <td>'.$item["nombre_autor"].'</td>
 	    	    
				<td>'.$item["fecha_salida"].'</td>

				<td>'.$item["fecha_entrada"].'</td>

				
				
				<td><a href="index.php?action=ok6&id_alquiler='.$item["id_alquiler"].'"><button>Editar</button></a></td>
				<td><a a href="index.php?action=ya&id_alquilerBorrar='.$item["id_alquiler"].'"><button>Borrar</button></a></td>
			  </tr>'; 

 	    }   

    }    
	
	#esto pertenece a el video de actualizar datos PDO parte 1-----------------------------------
	#EDITAR USUARIOS--------------------------------------

	    public function editarAlquilerController(){

		 $datosController= ($_GET["id_alquiler"]);
		$respuesta = alquilerDatos::editarAlquilerModel($datosController , "alquileres");

		#esto pertenece a el video de actualizar datos PDO parte 2-----------------------------------
		
		echo '<input type= "hidden" value="'.$respuesta["id_alquiler"].'" name="idEditar">

		      <label><td>Lector</label><input type="text" value="'.$respuesta["nombres"].'" name="nombresEditar" required>
		      <label><td>Libro_autor</label><input type="text" value="'.$respuesta["nombre_autor"].'" name="nombre_autorEditar" required>

		      <label><td>Fecha_salida</label><input type="date" value="'.$respuesta["fecha_salida"].'" name="fecha_salidaEditar" required>
	       <label><td>fecha_entrada</label><input type="date" value="'.$respuesta["fecha_entrada"].'" name="fecha_entradaEditar" required>
	
		      

		      <input type="submit" value="Actualizar">';

	 } 

	 #ACTUALIZAR USUARIOS----------------------------------------

	    public function actualizarAlquilerController(){

			if(isset($_POST["nombresEditar"])){

				$datosController = array ("id_alquiler"=>$_POST["idEditar"],

					             "nombres"=>$_POST["nombresEditar"],
					              "nombre_autor"=>$_POST["nombre_autorEditar"],
					               "fecha_salida"=>$_POST["fecha_salidaEditar"],
					            "fecha_entrada"=>$_POST["fecha_entradaEditar"]);
								
								$respuesta= alquilerDatos::actualizarAlquilerModel($datosController, "alquileres");

                                if ( $respuesta == "success"){

									header("location:index.php?action=ya");
                            }

                                else {

									echo "";

   } 	
} 	
}


     public function borrarAlquilerController(){
 
	if(isset($_GET["id_alquilerBorrar"])){
		$datosController = $_GET["id_alquilerBorrar"];

$respuesta = alquilerDatos::borrarAlquilerModel($datosController,"alquileres");

if($respuesta == "success"){

			header("location:index.php?action=ya");
  }	
 }

} 
}


?>


