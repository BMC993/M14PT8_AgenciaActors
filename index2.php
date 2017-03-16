<?php
include 'model/tipusAnimal.class.php';
include 'model/animal.class.php';
session_start();
include 'controller/validarSessio_ctl.php';
include 'view/mostrarMissatge.php';
$animals = new AnimalsDAO();
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

switch ($ctl) {
    case "animal":
        if ($act == "editar") {
            include "controller/editarAnimal_ctl.php";
        } else if ($act == "eliminar") {
            include "controller/eliminarAnimal_ctl.php";
        }
//        else {
//            include "controller/afegirAnimal_ctl.php";
//        }
        break;
    default:
        include "controller/" . $ctl . "_ctl.php";
}
?>