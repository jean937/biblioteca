<?php 

class Paginas{
	
	public static function enlacesPaginasModel($enlaces){
		

		if($enlaces =="ingresarUsuario"){
			$modules =  "views/usuario/ingresarDatos.php";
		}

		 if($enlaces =="ingresarAutores" ){
				$modules =  "views/autor/ingresar.php";


		}


        if($enlaces =="ingresarPreguntas" ){
				$modules =  "views/libro/datosLibro.php";
		}



		 if($enlaces =="ingresarHabilitar" ){
				$modules =  "views/alquiler/datosAlquiler.php";
		}

		if($enlaces =="ingresarCategoria" ){
				$modules =  "views/categoria/datosCategoria.php";
		}
         

  //        if($enlaces =="ingresar" ){
		// 		$modules =  "views/ingresar/ingresar.php";
		// }

		 if($enlaces =="ingresarlect" ){
		$modules =  "views/lector/lector.php";

		}

		  if($enlaces =="ok2" ){
				$modules =  "views/categoria/editar.php";
		}

		 if($enlaces =="cambio" ){
				$modules =  "views/categoria/editarCategoria.php";
		}
        
        if($enlaces =="ok1" ){
				$modules =  "views/usuario/editar.php";
		}


           if($enlaces =="ya1" ){
				$modules =  "views/usuario/editarUsuario.php";
		}


		 if($enlaces =="ok3" ){
				$modules =  "views/autor/editar.php";
		}
      

      if($enlaces =="aldas" ){
				$modules =  "views/autor/editarAutor.php";
		}

		 if($enlaces =="je" ){
				$modules =  "views/lector/editarLector.php";
		}

		if($enlaces =="ok4" ){
				$modules =  "views/lector/editar.php";
		}
        if($enlaces =="pe" ){
				$modules =  "views/libro/editarLibro.php";
		}

		 if($enlaces =="ok5" ){
				$modules =  "views/libro/editar.php";
		}




		 if($enlaces =="ok6" ){
				$modules =  "views/alquiler/editar.php";
		}

		if($enlaces =="ya" ){
				$modules =  "views/alquiler/editarAlquiler.php";
		}

		if($enlaces == "salir"){

		$modules =  "views/salir/salir.php";
		
		}

		

		if($enlaces == "vista"){

		$modules =  "views/salir/vistas.php";
		
		}

		



       
        if($enlaces =="ingresareditor" ){
		$modules =  "views/editorial/editoriales.php";

		}
		 if($enlaces =="ok8" ){
				$modules =  "views/editorial/editar.php";
		}


           if($enlaces =="you" ){
				$modules =  "views/editorial/editareditorial.php";
		}






 return $modules;


	}
	

}


?>