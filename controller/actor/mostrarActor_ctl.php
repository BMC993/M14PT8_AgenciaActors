<?php

$actor = $agencia->cercarActor($id);
$llistaPapers = $agencia->recuperarPapersDeActor($id);

// $llistaProjectes = $agencia->recuperarProjectes();
include 'view/header.php';
include 'view/actor/mostrarActor.php';
include 'view/footer.php';
?>