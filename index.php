<?php



require_once "models/enlaces.php";
require_once "controllers/controller.php";

require_once "models/autor.php";
require_once "controllers/autorController.php";




require_once "models/usuario.php";
require_once "controllers/usuarioController.php";

require_once "models/libro.php";
require_once "controllers/libroController.php";

require_once "models/alquiler.php";
require_once "controllers/alquilerController.php";

require_once "models/categoria.php";
require_once "controllers/categoriaController.php";


// require_once "models/ingresar.php";
// require_once "controllers/ingresarController.php";

require_once "models/lector.php";
require_once "controllers/lectorController.php";



require_once "models/editorial.php";
require_once "controllers/editorialController.php";




$lector = new lectorController();
$categoria = new categoriaController();
$libro = new libroController();
$alquiler = new alquilerController();
$usuario = new usuarioController();
$autor = new autorController();
$editorial = new editorialController();

$editorial = new editorialController();

$mvc = new MvcController();
$mvc -> pagina();

?>
