<!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/public/bower_components/bootstrap/dist/css/bootstrap.min.css">


  <!-- Theme style -->
  <link rel="stylesheet" href="views/public/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="views/public/dist/css/skins/_all-skins.min.css">

 

  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="views/public/bower_components/jquery/dist/jquery.min.js"></script>
  
  <!-- Bootstrap 3.3.7 -->
  <script src="views/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  
  <!-- AdminLTE App -->
  <script src="views/public/dist/js/adminlte.min.js"></script>

  <script src="views/public/js/plantilla.js"></script>


<center><table border="8" cellpadding="8" cellspacing="20">

<td><center><h1>INGRESAR</h1></center></td>

	<form method="post" >

		<tr><td>Usuario: <input type="text" placeholder="usuario" name="usuarioIngreso" required></td></tr>

		<tr><td>Password: <input type="text" placeholder="password" name="passwordIngreso" required></td></tr>   
             
             
              <tr><td>Perfil:<select name=Perfil>

                        <option value="">Seleccionar Perfil</option>
                         <option value="Administrador">Administrador</option>
                         <option value="Estudiante">Estudiante</option>
                        

		<tr><td><center><input type="submit" value="Acceder"></center></td>

	</form>

<?php
$ingreso = new ingresarController();
$ingreso -> ingresoUsuarioController();

if (isset($_GET["action"])){

  	if ($_GET["action"] == "fallo"){

  		echo '<div class="alert alert-danger" role="alert"> <h6> USTED NO ESTA HABILITADO</h6></div>';
  	}
  }
?>
</table></center>