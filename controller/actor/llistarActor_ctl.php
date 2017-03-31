<?php

$llistaActors = $agencia->recuperarActors();

$titol = "Els nostres actors";

include 'view/header.php';
include 'view/actor/llistaActor.php';
include 'view/footer.php';
?>
