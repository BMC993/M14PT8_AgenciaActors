<?php

require_once("../../config/inici.inc.php");
require_once("../../config/config.inc.php");
require_once("../../controller/function_AutoLoad.php");

if (isset($_REQUEST['validar'])) {

    if ($_REQUEST['validar'] == "crearProjecte") {
        $nom = $_REQUEST["nom"];
        $descripcio = $_REQUEST["descripcio"];
        $tipus = $_REQUEST["tipus"];
        $dataInici = $_REQUEST["dataInici"];
        $dataFi = $_REQUEST["dataFi"];
        $director = $_REQUEST["director"];

        if (trim($nom) != "" && trim($descripcio) != "" && trim($tipus) != "" && trim($dataInici) != "" && trim($dataFi) != "" && trim($director)) {


            echo 1;
        } else {
            echo 2;
        }
    } else if ($_REQUEST['validar'] == "crearDirector") {
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
    } else if ($_REQUEST['validar'] == "editarDirector") {
        $nom = $_REQUEST["nom"];
        $cognom = $_REQUEST["cognom"];

        if (trim($nom) != "" && trim($cognom) != "") {
            echo 1;
        } else {
            echo 2;
        }
    } else if ($_REQUEST['validar'] == "crearActor") {
        $nom = $_REQUEST["nom"];
        $cognom = $_REQUEST["cognom"];
        $dni = $_REQUEST["dni"];

        if (trim($nom) != "" && trim($cognom) != "" && trim($dni) != "") {

            // comprovar si existeix el dni
            $agencia = unserialize($_SESSION['agencia']);
            $arrayD = $agencia->recuperarActors();
            $arrayDNI = array();

            foreach ($arrayD as $actor) {
                array_push($arrayDNI, $actor->getNif());
            }

            if (in_array($dni, $arrayDNI)) {
                echo 2;
            } else {
                echo 1;
            }
        } else {
            echo 2;
        }
    } else if ($_REQUEST['validar'] == "editarActor") {
        $nom = $_REQUEST["nom"];
        $cognom = $_REQUEST["cognom"];

        if (trim($nom) != "" && trim($cognom) != "") {
            echo 1;
        } else {
            echo 2;
        }
    } else if ($_REQUEST['validar'] == "crearTipusObra") {
        $nom = $_REQUEST["nom"];

        if (trim($nom) != "") {
            echo 1;
        } else {
            echo 2;
        }
    } else if ($_REQUEST['validar'] == "crearTipusPaper") {
        $nom = $_REQUEST["nom"];

        if (trim($nom) != "") {
            echo 1;
        } else {
            echo 2;
        }
    }
} else {
    echo "no entra al validar";
}
?>