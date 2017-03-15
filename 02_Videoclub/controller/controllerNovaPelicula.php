<?php

session_start();
require_once("../controller/function_AutoLoad.php");
require_once("../config/config.inc.php");
require_once("../config/db.inc.php");
require_once "../view/printError.php";

$msg = null;
try {

    if (isset($_SESSION['videoclub'])) {
        $videoclub = unserialize($_SESSION['videoclub']);
    } else {
        $videoclub = New videoclub("Videoclub Josep");
        $videoclub->populateVideoclub();
    }

    if (isset($_POST['submit'])) {
        
        $videoclub->afegirPelicula(addslashes($_POST['titol']), addslashes($_POST['director']), addslashes($_POST['productora']));
        $msg = "Dades introduides correctament!!";
        
    } else {
        
        $arrayDirectors = $videoclub->recuperarDirectors();
        $arrayProductores = $videoclub->recuperarProductores();
        include '../view/formulari_inserir_pelicula.php';
    }
} catch (Exception $e) {
    $msg = "Error en introduir les dades.";
}

if ($msg != null) {
    printError($msg);
}
?>