<?php


$llistaProjectes = $agencia->recuperarProjectes();
$director = $agencia->cercarDirector($id);

include 'view/header.php';
include 'view/director/mostrarDirector.php';
include 'view/footer.php';

?>