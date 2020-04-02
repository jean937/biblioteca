<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Template</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


   <style>

    nav{
      position:relative;
      margin:auto;
      width:100%;
      height:auto;
      background:black;
    }

    nav ul{
      position:relative;
      margin:auto;
      width:50%;
      text-align: center;
    }

    nav ul li{
      display:inline-block;
      width:24%;
      line-height: 50px;
      list-style: none;
    }

    nav ul li a{
      color:white;
      text-decoration: none;
    }

    section{
      position: relative;
      margin: auto;
      width:400px;
    }

    section h1{
      position: relative;
      margin: auto;
      padding:10px;
      text-align: center;
    }

    section form{
      position:relative;
      margin:auto;
      width:400px;
    }

    section form input{
      display:inline-block;
      padding:10px;
      width:95%;
      margin:5px;
    }

    section form input[type="submit"]{
      position:relative;
      margin:20px auto;
      left:4.5%;

    }

    table{
      position:relative;
      margin:auto;
      width:100%;
      left:-10%;
    }

    table thead tr th{
      padding:10px;
    }

    table tbody tr td{
      padding:10px;
    }
  </style>

  <!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/public/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/public/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="views/public/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="views/public/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="views/public/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="views/public/bower_components/jquery/dist/jquery.min.js"></script>
  
  <!-- Bootstrap 3.3.7 -->
  <script src="views/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="views/public/bower_components/fastclick/lib/fastclick.js"></script>
  
  <!-- AdminLTE App -->
  <script src="views/public/dist/js/adminlte.min.js"></script>

  <script src="views/public/js/plantilla.js"></script>

  


</head>

<body class="hold-transition skin-blue  sidebar-mini">
  <?php
  ob_start();
  ?>

  


   <header class="main-header">
  
  <!--=====================================
  LOGOTIPO
  ======================================-->
  <a href="inicio" class="logo">
    
    <!-- logo mini -->
    <span class="logo-mini">
      
      <img src="views/public/img/plantilla/icono-blanco.png" class="img-responsive" style="padding:10px">

    </span>

    <!-- logo normal -->

    <span class="logo-lg">
      
   <span class="logo-lg"><b>Alquiler</b> De Libros</span>

    </span>

  </a>

  <!--=====================================
  BARRA DE NAVEGACIÓN
  ======================================-->
  <nav class="navbar navbar-static-top" role="navigation">
    
    <!-- Botón de navegación -->

    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          
          <span class="sr-only">Toggle navigation</span>
        
        </a>

    <!-- perfil de usuario -->

    
  </nav>

 </header>



     <?php 

      include "navegacion.php";

      ?>


<section>

     <?php 

     $mvc = new MvcController();
     $mvc -> enlacesPaginasController();

     ?>

     </section>

     



 <?php
  ob_end_flush();
  ?>

  <script src="views/public/js/plantilla.js"></script>
</body>

</html>