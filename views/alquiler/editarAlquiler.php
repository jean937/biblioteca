
<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>


<h1>ALQULER</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>cliente</th>
				<th>nombre_libro</th>

				<th>FECHA_SALIDA</th>
				<th>FECHA_ENTRADA</th>
		
				<th>BOTON</th>
				<th>BOTON</th>

			</tr>

		</thead>

		<tbody>

			 <?php
			 
             $ingreso = new MvcController();
             $ingreso = new alquilerController();

             $ingreso -> vistaAlquilerController();
             
             $ingreso-> borrarAlquilerController();

            ?>
		

		</tbody>

	</table>

	       <?php


        
if (isset($_GET["action"])){
	if ($_GET["action"] == "ya"){
		
	
 
}

}
    ?>
