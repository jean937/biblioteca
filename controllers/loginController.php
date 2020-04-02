<?php

class loginController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function Login(){	
		
		include "views/ingresar/ingresar1.php";
	
	}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){
	

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
					
		}

		else{

			$enlaces = "index";
			
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		
		include $respuesta;

	}
}

?>