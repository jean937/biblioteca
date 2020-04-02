 

<?php


require_once "conexion.php";

class 

ingresarDatos extends Conexion{


 public static function ingresoUsuarioModel($datosModel, $tabla){

       $stmt =Conexion::conectar()->prepare("SELECT usuario, password FROM $tabla WHERE usuario=:usuario");
	   $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
       $stmt->execute();

       # el metodo fetch :obtiene una fila de un conjunto de resultados asociados al objeto PDOSTatement

       return $stmt->fetch();

       $stmt -> close();

}


}

?>