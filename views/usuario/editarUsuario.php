
<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>

<h1>USUARIO</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>NOMBRE</th>
				<th>USUARIO</th>
				<th>PASSWORD</th>
				<th>ESTADO</th>
				<th>BOTON</th>
				<th>BOTON</th>
		

			</tr>

		</thead>

		<tbody>

			 <?php
			 
             $ingreso = new MvcController();
             $ingreso = new usuarioController();

             $ingreso -> vistaUsuariosController();
             
             $ingreso-> borrarUsuarioController();

            ?>
		

		</tbody>

	</table>

	       <?php


        
if (isset($_GET["action"])){
	if ($_GET["action"] == "ya"){
		echo  "Cambio Existoso";
	
 
}

}
    ?>
