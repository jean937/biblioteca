<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>

    <td><center><h1>EDITORIAL</h1></center></td>

     <center><table border="8" cellpadding="8" cellspacing="15">




	<form method="post">
				
		<tr><td><label>Editorial:<input type="text" placeholder="editorial" name="editorial" required></td></tr></label>
		

		 
<tr><td><center><input type="submit" value="Guardar"></center>

	</form>

	<?php

$ingresar = new editorialController();


$ingresar -> ingresarEditorialController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "ingreso Exitoso";
	}
}

?>