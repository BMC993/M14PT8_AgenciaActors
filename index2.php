<?php

//include 'model/tipusAnimal.class.php';
//include 'model/animal.class.php';
//include 'controller/validarSessio_ctl.php';
//include 'view/mostrarMissatge.php';
//$animals = new AnimalsDAO();
//$ctl = "inici";
//session_start();
require_once("config/inici.inc.php");
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
        if ($act == "crear") {
            include "controller/actor/crearActor_ctl.php";
        } else if ($act == "editar") {
            include "controller/actor/editarActor_ctl.php";
        } else if ($act == "eliminar") {
            include "controller/actor/eliminarActor_ctl.php";
        } else if ($act == "llistar") {
            include "controller/actor/llistarActor_ctl.php";
        }
//        else {
//            include "controller/afegirAnimal_ctl.php";
//        }
        break;
    case "director":
        if ($act == "crear") {
            include "controller/director/crearDirector_ctl.php";
        } else if ($act == "eliminar") {
            include "controller/director/eliminarDirector_ctl.php";
        } else if ($act == "editar") {
            include "controller/director/editarDirector_ctl.php";
        } else if ($act == "llistar") {
            include "controller/director/llistarDirector_ctl.php";
        }
//        else {
//            include "controller/afegirAnimal_ctl.php";
//        }
        break;
    case "paper":
        if ($act == "crear") {
            include "controller/paper/crearPaper_ctl.php";
        } else if ($act == "editar") {
            include "controller/paper/editarPaper_ctl.php";
        } else if ($act == "eliminar") {
            include "controller/paper/eliminarPaper_ctl.php";
        } else if ($act == "llistar") {
            include "controller/paper/llistarPaper_ctl.php";
        }
//        else {
//            include "controller/afegirAnimal_ctl.php";
//        }
        break;
    case "projecte":
        if ($act == "crear") {
            include "controller/projecte/crearProjecte_ctl.php";
        } else if ($act == "editar") {
            include "controller/projecte/editarProjecte_ctl.php";
        } else if ($act == "eliminar") {
            include "controller/projecte/eliminarProjecte_ctl.php";
        } else if ($act == "eliminar") {
            include "controller/projecte/llistarProjecte_ctl.php";
        }
//        else {
//            include "controller/afegirAnimal_ctl.php";
//        }
        break;
    case "tipoObra":
        if ($act == "crear") {
            include "controller/tipo_obra/crearTipoObra_ctl.php";
        } else if ($act == "editar") {
            include "controller/tipo_obra/editarTipoObra_ctl.php";
        } else if ($act == "eliminar") {
            include "controller/tipo_obra/eliminarTipoObra_ctl.php";
        } else if ($act == "cercar") {
            include "controller/tipo_obra/c5.php";
        } else if ($act == "llistar") {
            include "controller/tipo_obra/llistarTipoPaper_ctl.php";
        }
//        else {
//            include "controller/afegirAnimal_ctl.php";
//        }
        break;

    case "tipoPaper":
        if ($act == "crear") {
            include "controller/tipo_paper/crearTipoPaper_ctl.php";
        } else if ($act == "editar") {
            include "controller/tipo_paper/editarTipoPaper_ctl.php";
        } else if ($act == "eliminar") {
            include "controller/tipo_paper/eliminarTipoPaper_ctl.php";
        } else if ($act == "cercar") {
            include "controller/tipo_paper/c5.php";
        }
//        else {
//            include "controller/afegirAnimal_ctl.php";
//        }
        break;

    case "user":
        if ($act == "crear") {
            include "controller/user/crearUser_ctl.php";
        } else if ($act == "editar") {
            include "controller/user/editarUser_ctl.php";
        } else if ($act == "eliminar") {
            include "controller/user/eliminarUser_ctl.php";
        } else if ($act == "llistar"){
            include "controller/user/llistarUser_ctl.php";
        }
//        else {
//            include "controller/afegirAnimal_ctl.php";
//        }
        break;
    default:
        include "controller/" . $ctl . "_ctl.php";
}
//}
?>