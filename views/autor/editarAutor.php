

<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>




<h1> CONSULTA AUTRORES</h1>




	<table border="1">
		
		<thead>
			
			<tr>
				
	       <th>Autores</th>

	    

				
				<th>BOTON</th>
				<th>BOTON</th>

			</tr>

		</thead>

		<tbody>

			 <?php
			 
             $ingresar = new MvcController();
             $ingresar = new autorController();

          
             $ingresar -> vistaAutorController();

             $ingresar-> borrarAutorController();


            ?>
		

		</tbody>

	</table>

	       <?php


        
if (isset($_GET["action"])){
	if ($_GET["action"] == "aldas"){
		echo  "Cambio Existoso";
	
 }
 
}



    ?>