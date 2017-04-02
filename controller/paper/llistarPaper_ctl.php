<?php

//$idProjecte = $id;
//$idProjecte = 1;
if (isset($_REQUEST['param'])) {
$llistaPapers = $agencia->recuperarPapersDeProjectes($id);
$llistaTipusPapers = $agencia->recuperarTipusPapers();
    
//$titol = "Projectes";
include 'view/paper/llistarPaper.php';
}