<?php

//include 'model/tipusAnimal.class.php';
//include 'model/animal.class.php';
//include 'controller/validarSessio_ctl.php';
//include 'view/mostrarMissatge.php';
//$animals = new AnimalsDAO();
//$ctl = "inici";
//session_start();
require_once("config/inici.inc.php");
require_once("config/config.inc.php");
require_once("controller/function_AutoLoad.php");

if (isset($_SESSION['agencia'])) {
    $agencia = unserialize($_SESSION['agencia']);
} else {
    $agencia = New agencia("Agencia XXX");
    $agencia->populateAgencia();
    $_SESSION['agencia'] = serialize($agencia);
}


$ctl = "inici";
if (isset($_REQUEST['ctl'])) {
    $ctl = $_REQUEST['ctl'];
    $act = null;
    if (isset($_REQUEST['act'])) {
        $act = $_REQUEST['act'];
    }
    if (isset($_REQUEST['param'])) {
        $id = $_REQUEST['param'];
    }
}
//
//if (validarSessio($nom, $pass)) {
//    $loguejat = true;
//} else {
//    $loguejat = false;
//}
//POSAR A AGENCIABD:
//function verificar_login($user,$password,&$result)
//    {
//        $sql = "SELECT * FROM usuarios WHERE usuario='$user' and password='$password'";
//        $rec = mysql_query($sql);
//        $count = 0;
//        while($row = mysql_fetch_object($rec))
//        {
//            $count++;
//            $result = $row;
//        }
//        if($count == 1)
//        {
//            return 1;
//        }
//        else
//        {
//            return 0;
//        }
//    }
//if (validarSessio($nom, $pass)) {
switch ($ctl) {


    case "actor":
        if ($act == "crear" || $act == "editar" || $act == "eliminar" || $act == "mostrar" || $act == "llistar") {
            include "controller/actor/" . $act . "Actor_ctl.php";
        }
        break;
    case "director":
        if ($act == "crear" || $act == "editar" || $act == "eliminar" || $act == "mostrar" || $act == "llistar") {
            include "controller/director/" . $act . "Director_ctl.php";
        }
        break;
    case "paper":
        if ($act == "crear" || $act == "editar" || $act == "eliminar" || $act == "mostrar" || $act == "llistar") {
            include "controller/paper/" . $act . "Paper_ctl.php";
        }
        break;
    case "projecte":
        if ($act == "crear" || $act == "editar" || $act == "eliminar" || $act == "mostrar" || $act == "llistar") {
            include "controller/projecte/" . $act . "Projecte_ctl.php";
        }
        break;
    case "tipoObra":
        if ($act == "crear" || $act == "editar" || $act == "eliminar" || $act == "mostrar" || $act == "llistar") {
            include "controller/tipo_obra/" . $act . "TipoObra_ctl.php";
        }
        break;
    case "tipoPaper":
        if ($act == "crear" || $act == "editar" || $act == "eliminar" || $act == "mostrar" || $act == "llistar") {
            include "controller/tipo_paper/" . $act . "TipoPaper_ctl.php";
        }
        break;
    case "user":
        if ($act == "crear" || $act == "editar" || $act == "eliminar" || $act == "mostrar" || $act == "llistar") {
            include "controller/user/" . $act . "User_ctl.php";
        }
        break;
    default:
        include "controller/" . $ctl . "_ctl.php";
}
//}
?>