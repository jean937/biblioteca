<h1>EDITAR ALQUILER</h1>

<form method="post">
 
  <?php

  # esto es del video de actualizar datos PDO parte 2 y ya paso la parte 1------
 
  $editarAlquiler = new MvcController();
  $editarAlquiler = new alquilerController();
  $editarAlquiler->editarAlquilerController(); 
  $editarAlquiler->actualizarAlquilerController(); 

?>	
	
</form>