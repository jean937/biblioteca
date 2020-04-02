<?php




class ingresarController{


  public function ingresoUsuarioController() {

    if (isset($_POST["Perfil"])){

        date_default_timezone_set('America/Guayaquil');
      $fecha = date("Y-m-d");
      $hora = date("H:i:s");

      if($_POST["Perfil"]== "Administrador"){

        //ingreso administrador comienza
       $datosController = array ("usuario" => $_POST["usuarioIngreso"],
         "password" => $_POST["passwordIngreso"]);

       $respuesta= ingresarDatos::ingresoUsuarioModel($datosController, "usuarios");

       if($respuesta["usuario"]==$_POST["usuarioIngreso"] && $respuesta["password"]==$_POST["passwordIngreso"]){
        


        header('Content-Type: text/html; charset=utf-8');
        session_start();

        $_SESSION["validar"]=true;
        $_SESSION["usuario"]=$respuesta["usuario"];
        $_SESSION["perfil"]="Administrador";
        $_SESSION["estado"]=$respuesta["estado"];




        header("location:index.php?action=vista");


      }

 else{
        $_SESSION["validar"]=false;
        header("location:login.php?action=fallo");


      }
      //te
     




    }


  }

      }


}


?>
