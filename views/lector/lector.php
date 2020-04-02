


<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>
<td><center><h1>LECTOR</h1></td></center>

 <center><table border="8" cellpadding="8" cellspacing="15">



	<form method="post">
				
		<tr><td><label>Nombres:<input type="text" placeholder="nombres" name="nombres" required></td></tr></label>

	   <tr><td><label>Telofono:<input type="text" placeholder="telefono" name="telefono" required></td></tr></label>

		<tr><td><label>Direccion:<input type="text" placeholder="direccion" name="direccion" required></td></tr></label>

	<tr><td><label>codigo_postal:<input type="text" placeholder="codigo_postal" name="codigo_postal" required></td></tr></label>

		<tr><td><center><input type="submit" value="Guardar"></center></td></tr>

	</form>

	<?php

$ingresar = new lectorController();

$ingresar->ingresarLectorController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "ingreso Exitoso";
	}
}

?>
</table></center>