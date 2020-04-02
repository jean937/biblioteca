
<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>


<h1> CONSULTAS CATEGORIA</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				
	       <th>CATEGORIA</th>

	  

				
				<th>BOTON</th>
				<th>BOTON</th>

			</tr>

		</thead>

		<tbody>

			 <?php
			 
             $ingresar = new MvcController();
             $ingresar = new categoriaController();

          
             $ingresar -> vistaCategoriaController();

             $ingresar-> borrarCategoriaController();


            ?>
		

		</tbody>

	</table>

	       <?php


        
if (isset($_GET["action"])){
	if ($_GET["action"] == "cambio"){
		
	
 }
 
}



    ?>