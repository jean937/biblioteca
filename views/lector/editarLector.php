
<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>

<h1> CONSULTA LECTORES</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				
				<th>nombre</th>
				<th>telefono</th>
				<th>direccion</th>
				<th>codigo-postal</th>
			   
				<th>boton</th>
				<th>boton</th>

			

			</tr>

		</thead>

		<tbody>

			 <?php
			 
             $ingreso = new MvcController();
             $ingreso = new lectorController();

             $ingreso -> vistaLectorController();
             
             $ingreso-> borrarLectorController();

            ?>
		

		</tbody>

	</table>

	       <?php


        
if (isset($_GET["action"])){
	if ($_GET["action"] == "je"){
		echo  "Cambio Existoso";
	
 
}

}
    ?>
