<?php



require_once "models/enlaces.php";
require_once "controllers/loginController.php";

require_once "models/ingresar.php";
require_once "controllers/ingresarController.php";






$ingresar = new ingresarController();
$mvc = new loginController();
$mvc -> Login();

?>
