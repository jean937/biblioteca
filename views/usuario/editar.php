<h1>EDITAR USUARIO</h1>

<form method="post">
 
  <?php

  # esto es del video de actualizar datos PDO parte 2 y ya paso la parte 1------
 
  $editarUsuario = new MvcController();
  $editarUsuario = new usuarioController();
  $editarUsuario->editarUsuarioController(); 
  $editarUsuario->actualizarUsuarioController(); 

?>	
	
</form>
