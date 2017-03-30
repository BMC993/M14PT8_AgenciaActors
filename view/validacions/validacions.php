<?php

require_once("../../config/inici.inc.php");
require_once("../../config/config.inc.php");
require_once("../../controller/function_AutoLoad.php");

if (isset($_REQUEST['validar'])) {

    if ($_REQUEST['validar'] == "director") {
        $nom = $_REQUEST["nom"];
        $cognom = $_REQUEST["cognom"];
        $dni = $_REQUEST["dni"];
        
        if (trim($nom) != "" && trim($cognom) != "" && trim($dni) != "") {
            
            // comprovar si existeix el dni
            $agencia = unserialize($_SESSION['agencia']);
            $arrayD = $agencia->recuperarDirectors();
            $arrayDNI = array();
            
            foreach ($arrayD as $director) {
                array_push($arrayDNI, $director->getNif());
            }
            
            if (in_array($dni, $arrayDNI)) {
                echo 2;
            } else {
                echo 1;
            }
        } else {
            echo 2;
        }
    }
} else {
    echo "no entra al validar";
}
?>