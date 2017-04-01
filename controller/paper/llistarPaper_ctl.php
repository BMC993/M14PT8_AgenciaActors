<?php

//$idProjecte = $id;
$idProjecte = 1;
$llistaPapers = $agencia->recuperarPapersDeProjectes($idProjecte);
$llistaTipusPapers = $agencia->recuperarTipusPapers();
    
//$titol = "Projectes";

include 'view/header.php';
include 'view/paper/llistarPaper.php';
include 'view/footer.php';