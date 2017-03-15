<?php



//Passar els metodes de la classe bd a cada classeBD personalitzada,
//i canviar rutes de metodes,
//i crear els dos bd que falten
//fer que no es mostrin els codis a la llista, sino els noms










require_once("config/inici.inc.php");
require_once("controller/function_AutoLoad.php");

if (isset($_SESSION['videoclub'])) {
    $videoclub = unserialize($_SESSION['videoclub']);
} else {
    $videoclub = New videoclub("Videoclub Josep");
    $videoclub->populateVideoclub();
    $_SESSION['videoclub'] = serialize($videoclub);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Videoclub</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="es" />		
    </head>
    <body>		
        <a href="controller/controllerNovaPelicula.php">Alta pel·licula</a>
        <a href="view/mostrar_pelicules.php">Veure totes les pel·licules</a>
    </body>
</html>