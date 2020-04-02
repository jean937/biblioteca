<?php


class usuarioController{

	# ---Registro de usuarios---
	public function ingresarUsuarioController(){

		if(isset($_POST["nombre"])){

			$datosController = array("nombre"=>$_POST["nombre"],
	    		                     "usuario"=>$_POST["usuario"],
		    						"password"=>$_POST["password"],
						 			 "estado"=>$_POST["estado"]);

			$repuesta = usuarioDatos::ingresarUsuarioModel($datosController,"usuarios");


			if($repuesta=="success"){
				
				header("location:index.php?action=ingresarUsuario");
			

			}
			else{

				header("location:index.php");
			}

		}
	}



        public function vistaUsuariosController (){

 	    $respuesta = usuarioDatos::vistaUsuariosModel("usuarios");

    # el Constructor foreach es modo mas sencillode iterar sobre arrays y objetos

 	    foreach ($respuesta as $row => $item ){
 	    	echo '<tr>
 	    	    <td>'.$item["nombre"].'</td>
				<td>'.$item["usuario"].'</td>
				<td>'.$item["password"].'</td>
				<td>'.$item["estado"].'</td>
				
				<td><a href="index.php?action=ok1&id_usuario='.$item["id_usuario"].'"><button>Editar</button></a></td>
				<td><a a href="index.php?action=ya1&id_usuarioBorrar='.$item["id_usuario"].'"><button>Borrar</button></a></td>
			  </tr>'; 

 	    }   

    }    
	
	#esto pertenece a el video de actualizar datos PDO parte 1-----------------------------------
	#EDITAR USUARIOS--------------------------------------

	    public function editarUsuarioController(){

		 $datosController= ($_GET["id_usuario"]);
		$respuesta = usuarioDatos::editarUsuarioModel($datosController , "usuarios");

		#esto pertenece a el video de actualizar datos PDO parte 2-----------------------------------
		
		echo '<input type= "hidden" value="'.$respuesta["id_usuario"].'" name="idEditar">

		      <label><td>Nombre</label><input type="text" value="'.$respuesta["nombre"].'" name="nombreEditar" required>

		     <label><td>Usuario</label> <input type="text" value="'.$respuesta["usuario"].'" name="usuarioEditar" required>
	
		      <label><td>Password</label><input type="text" value="'.$respuesta["password"].'" name="passwordEditar" required>

	            <label><td>Estado</label><input type="text" value="'.$respuesta["estado"].'" name="estadoEditar" required>

		      <input type="submit" value="Actualizar">';

	 } 

	 #ACTUALIZAR USUARIOS----------------------------------------

	    public function actualizarUsuarioController(){

			if(isset($_POST["usuarioEditar"])){

				$datosController = array ("id_usuario"=>$_POST["idEditar"],
					             "nombre"=>$_POST["nombreEditar"],
					            "usuario"=>$_POST["usuarioEditar"],
					            "password"=>$_POST["passwordEditar"],
								"estado"=>$_POST["estadoEditar"]);
								
								$respuesta= usuarioDatos::actualizarUsuarioModel($datosController, "usuarios");

                                if ( $respuesta == "success"){

									header("location:index.php?action=ya1");
                            }

                                else {

									echo "error";

   } 	
} 	
}


     public function borrarUsuarioController(){
 
	if(isset($_GET["id_usuarioBorrar"])){
		$datosController = $_GET["id_usuarioBorrar"];

$respuesta = usuarioDatos::borrarUsuarioModel($datosController,"usuarios");

if($respuesta == "success"){

			header("location:index.php?action=ya1");
  }	
 }

} 
}


?>