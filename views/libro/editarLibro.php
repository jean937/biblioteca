
<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>

<h1>CONSULTA LIBROS</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>Autor</th>
				<th>Categoria</th>
				<th>Editorial</th>
				<th>Nombre_autor</th>
				<th>Fecha_lanza</th>
				<th>Idioma</th>
				<th>Paginas</th>
				<th>Descripcion</th>
				
				<th>BOTON</th>
				<th>BOTON</th>
			

			</tr>

		</thead>

		<tbody>

			 <?php
			 
             $ingresar = new MvcController();
             $ingresar = new libroController();

             $ingresar -> vistaLibroController();
             
             $ingresar-> borrarLibroController();

            ?>
		

		</tbody>

	</table>

	       <?php


        
if (isset($_GET["action"])){
	if ($_GET["action"] == "pe"){
		
 
}

}
    ?>
