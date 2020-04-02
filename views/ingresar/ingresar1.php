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


<body class="bg-info ">

  <div class="container">
    <!-- <h1 class="h1 text-white text-lg-center">SISTEMA PARA EL CONTROL DE RUTAS DE UBICACION DE BUSES </h1>
 -->

    <!-- Outer Row -->
    <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-4 col-md-4">

              </div>



      <div class="col-xl-4 col-lg-4 col-md-4">

        <div class="card o-hidden border-0 shadow-lg my-5">

          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

            
              <div class="col-lg-12">
                <div class="p-5">

                  <div class="text-center ">
                    <h1 class="h3 text-gray-900 mb-4">Bienvenidos</h1>
                  </div>
                  <div class="text-center ">
                   <img src="views/public/img/usuarios/default/p.jpg" width="190px" >
                  <hr>
                  </div>
                  
                  <form class="user" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="usuarioIngreso" aria-describedby="emailHelp" placeholder="INGRESE EL USUARIO" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user h3" name="passwordIngreso" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                      <select class="form-group form-control" name="Perfil" required>
                        <option>Seleccione el perfil</option>
                        <option value="Administrador">Administrador</option>
                        
                      </select>
                      
                    </div>
                    
                    <input class="btn btn-primary btn-user btn-block" type="submit" value="Acceder">
                    
                    <hr>
                    
                  </form>

                  <?php
$ingreso = new ingresarController();
$ingreso -> ingresoUsuarioController();

if (isset($_GET["action"])){

    if ($_GET["action"] == "fallo"){

      echo '<div class="alert alert-danger text-center" role="alert"> <h6> USTED NO ESTA HABILITADO</h6></div>';
    }
  }
?>
            
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</body>