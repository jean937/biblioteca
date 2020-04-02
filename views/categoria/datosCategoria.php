


<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>

<?php

    
   
?>

<center><table border="8" cellpadding="8" cellspacing="15">

<td><center><h1>CATEGORIA</h1></center>

	<form method="post" action="">
		

		
		<tr><td><label>Categoria:<input type="text" placeholder="categoria"  name="categoria" required></td></tr></label>

		 
		



		 <tr><td><center><input type="submit" value="Enviar"></center></td></tr>
		




	</form>

	<?php

$ingresar = new categoriaController();

$ingresar->ingresarCategoriaController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "ingreso Exitoso";
	}
}

?>
</table></center>
