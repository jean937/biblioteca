<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>

<h1> CONSULTA EDITORIALES</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>Editorial</th>
				
				<th>BOTON</th>
				<th>BOTON</th>
		

			</tr>

		</thead>

		<tbody>

			 <?php
			 
             $ingreso = new MvcController();
             $ingreso = new editorialController();
               $ingreso -> vistaEditorialController();
             
             $ingreso-> borrarEditorialController();


           
            ?>
		

		</tbody>

	</table>

	       <?php


        
if (isset($_GET["action"])){
	if ($_GET["action"] == "you"){
		echo  "Cambio Existoso";
	
 
}

}
    ?>
