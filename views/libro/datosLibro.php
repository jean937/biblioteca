
<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>

<?php

    include 'views/conexion1.php';

    $query=mysqli_query($mysqli,"SELECT id_autor, autor FROM autores");
    
   $query1=mysqli_query($mysqli,"SELECT id_categoria, categoria FROM categorias");

   $query2=mysqli_query($mysqli,"SELECT id_editorial, editorial FROM editoriales");
?>

   


    </tr></td><center><h1>LIBROS</h1></center>

   <center><table border="8" cellpadding="8" cellspacing="15">



	<form method="post">
        <tr><td><label>Autor</label>

                    <select name="id_autor">
                        <option value="0">Selecciona una opcion</option>
                   
                    <?php 
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>
                            <option value="<?php echo $datos['id_autor']?>"> <?php echo $datos['autor']?> </option>
                    <?php
                        }
                    ?> 
                    

                    <tr><td><label>Categoria</label>

                    <select name="id_categoria">
                        <option value="0">Selecciona una opcion</option>
                   
                    <?php 
                        while($datos1 = mysqli_fetch_array($query1))
                        {
                    ?>
                            <option value="<?php echo $datos1['id_categoria']?>"> <?php echo $datos1['categoria']?> </option>
                    <?php
                        }
                    ?> 

    
		

		      
                <tr><td><label>Editorial</label>

                    <select name="id_editorial">
                        <option value="0">Selecciona una opcion</option>
                   
                    <?php 
                        while($datos2 = mysqli_fetch_array($query2))
                        {
                    ?>
                            <option value="<?php echo $datos2['id_editorial']?>"> <?php echo $datos2['editorial']?> </option>
                    <?php
                        }
                   ?> 

         <tr><td><label>Nombre_autor:<input type="text" placeholder="nombre_autor" name="nombre_autor" required></tr></td></label>

         <tr><td><label>Fecha_lan:<input type="date" placeholder="fecha_lan" name="fecha_lan" required></tr></td></label>

         <tr><td><label>Idioma:<input type="text" placeholder="idioma" name="idioma" required></tr></td></label>

          <tr><td><label>Paginas:<input type="text" placeholder="paginas" name="paginas" required></tr></td></label>


           <tr><td><label>Descripcion:<input type="text" placeholder="descripcion" name="descripcion" required></tr></td></label>


           

        
        
        
        


        

            
             
                  
                        <tr><td><center><input type="submit" value="Guardar"></center>
               

		  </form>
		

	<?php

$ingresar = new MvcController();

$ingresar = new libroController();

$ingresar->ingresarLibroController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "ingreso Exitoso";
	}
}

?>
