


<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>

<center><table border="8" cellpadding="8" cellspacing="15">

<td><center><h1>AUTORES</h1></center>

	<form method="post" action="">
		

		<tr><td><label>Autores:<input type="text" placeholder="autor"  name="autor" required></td></tr></label>
        



		 <tr><td><center><input type="submit" value="Enviar"></center></td>

	</form>

	<?php

$ingresar = new autorController();

$ingresar->ingresarAutorController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "ingreso Exitoso";
	}
}

?>
