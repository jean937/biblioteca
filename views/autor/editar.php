<h1>EDITAR AUTOR</h1>


<form method="post">
 
  <?php

  # esto es del video de actualizar datos PDO parte 2 y ya paso la parte 1------
 
  $editarAutor = new MvcController();
  $editarAutor = new autorController();
  $editarAutor->editarAutorController(); 
  $editarAutor->actualizarAutorController(); 

?>	
	
</form>