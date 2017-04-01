<?php

//$projecte = $agencia->cercarProjecte($idProjecte);
//$projecte = $agencia->cercarProjecte(1);



if (isset($_POST['submit'])) {
    if (isset($_REQUEST['idActor']) && isset($_REQUEST['nomPaper']) && isset($_REQUEST['idTipusPaper'])) {

        $idActor = $_REQUEST['idActor'];
        $nomPaper = $_REQUEST['nomPaper'];
        $idTipusPaper = $_REQUEST['idTipusPaper'];
        
        $agencia->afegirPaper(addslashes($id), addslashes($idActor), addslashes($nomPaper), addslashes($idTipusPaper));
        header('Location: ?ctl=actor&act=llistar');
    } else {
        echo 'error 1';
    }
} else {
    $llistaActors = $agencia->recuperarActors();
    $arrayDeTipusPapers = $agencia->recuperarTipusPapers();
    include 'view/header.php';
    include 'view/paper/formCrearPaper.php';
    include 'view/footer.php';
}