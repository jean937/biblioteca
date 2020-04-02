<?php
  
session_start();
echo "El Estudiante:".$_SESSION["usuario"];
session_destroy();
header("location:login.php");
?>

<center><h1>Haz salido de la aplicacion</h1></center>