<h1>EDITAR CATEGORIA</h1>

<form method="post">
 
  <?php

  # esto es del video de actualizar datos PDO parte 2 y ya paso la parte 1------
 
  $editarCategoria = new MvcController();
  $editarCategoria = new categoriaController();
  $editarCategoria->editarCategoriaController(); 
  $editarCategoria->actualizarCategoriaController(); 

?>	
	
</form>