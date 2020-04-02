<h1>EDITAR LECTOR</h1>

<form method="post">
 
  <?php

  # esto es del video de actualizar datos PDO parte 2 y ya paso la parte 1------
 
  $editarLector= new MvcController();
  $editarLector = new lectorController();
  $editarLector->editarLectorController(); 
  $editarLector->actualizarLectorController(); 

?>	
	
</form>