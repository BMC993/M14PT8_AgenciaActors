<?php

if (!isset($_REQUEST['param'])) {
    header("Location : ?ctl=projecte&act=llistar");
} else {
    $idProjecte = $_REQUEST['param'];
    $projecte = $agencia->cercarProjecte($idProjecte);

    if ($projecte != NULL) {
        include 'view/header.php';
        include 'view/projecte/mostrarProjecte.php';
        include 'view/footer.php';
    } else {
        header("Location : ?ctl=projecte&act=llistar");
    }
}