

<?php
//session_start();

if (!$_SESSION["validar"]) {
header("location:index.php?action=ingresar");

exit();
}

?>





<?php

    include 'views/conexion1.php';

    $query=mysqli_query($mysqli,"SELECT id_lector, nombres FROM lectores");

    $query1=mysqli_query($mysqli,"SELECT id_libro, nombre_autor FROM libros");
    

?>




       </tr></td><center><h1>Alquiler</h1></center>

   <center><table border="8" cellpadding="8" cellspacing="15">



	<form method="post" action="">
		
       <tr><td><label>Clientes</label>

                    <select name="id_lector" required>
                        <option value="">Selecciona una opcion</option>
                    <?php 
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>
                            <option value="<?php echo $datos['id_lector']?>"> <?php echo $datos['nombres']?> </option>
                             
                    <?php
                        }
                    ?> 
                   </select>



                    <tr><td><label>Nombre_libro</label>

                    <select name="id_libro" required>
                        <option value="">Selecciona una opcion</option>
                    <?php 
                        while($datos1 = mysqli_fetch_array($query1))
                        {
                    ?>
                            <option value="<?php echo $datos1['id_libro']?>"> <?php echo $datos1['nombre_autor']?> </option>
                             
                    <?php
                        }
                    ?> 

                   </select>
           

                   <tr><td> <label>Fecha_salida<input type="date" placeholder="fecha_salida" name="fecha_salida" required></td></tr></label>

                      <tr><td> <label>Fecha_entrada<input type="date" placeholder="fecha_entrada" name="fecha_entrada" required></td></tr></label>




                   <tr><td><center><input type="submit" value="Enviar"></center></td>
              
        </form>
  

		
	<?php

$ingresar = new alquilerController();

$ingresar->ingresarAlquilerController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "ingreso Exitoso";
	}
}

?>
</table></center>
