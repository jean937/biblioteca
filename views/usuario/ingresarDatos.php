<?php
//session_start();

if(!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>

    <td><center><h1>USUARIO</h1></center></td>

     <center><table border="8" cellpadding="8" cellspacing="15">




	<form method="post">
				
		<tr><td><label>Nombre:<input type="text" placeholder="nombre" name="nombre" required></td></tr></label>
		<tr><td><label>Usuario:<input type="text" placeholder="usuario" name="usuario" required></td></tr></label>
		<tr><td><label>Password:<input type="text" placeholder="password" name="password" required></td></tr></label>

		 <tr><td><label>Estado: </label>

                  <select type="text" placeholder="estado" name="estado" required>
                        <option>Activo</option>
                        <option>Inactivo</option>
<tr><td><center><input type="submit" value="Guardar"></center>

	</form>

	<?php

$ingresar = new usuarioController();

$ingresar->ingresarUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "ingreso Exitoso";
	}
}

?>