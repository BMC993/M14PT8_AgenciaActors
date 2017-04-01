<?php


//$llistaPapers = $agencia->recuperarPapers();
$llistaTipusPapers = $agencia->recuperarTipusPapers();
$llistaActors = $agencia->recuperarActors();
    
//$titol = "Projectes";

include 'view/header.php';
include 'view/paper/llistarPaper.php';
include 'view/footer.php';