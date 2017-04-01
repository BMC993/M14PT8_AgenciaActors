<?php

//$idProjecte = $id;
//$idProjecte = 1;
$llistaPapers = $agencia->recuperarPapersDeProjectes($id);
$llistaTipusPapers = $agencia->recuperarTipusPapers();
    
//$titol = "Projectes";
include 'view/paper/llistarPaper.php';