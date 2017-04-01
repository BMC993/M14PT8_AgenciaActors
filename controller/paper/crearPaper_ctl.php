<?php

//$projecte = $agencia->cercarProjecte($idProjecte);
//$projecte = $agencia->cercarProjecte(1);



if (isset($_POST['submit'])) {
    if (isset($_REQUEST['nomPaper'])) {

//$projecte = $_REQUEST['idProjecte'];
        $projecte = 1;
//$actor = $_REQUEST['idActor'];
        $actor = 1;
//$tipusPaper = $_REQUEST['idTipusPaper'];   CREC QUE AQUEST ES POT ELIMINAR
        $nomPaper = $_REQUEST['nomPaper'];
//$nomTipusPaper = $_REQUEST['nomTipusPaper'];          Primer provo sense select, directament.
        $tipusPaper = 1;

//$agencia->afegirTipusPaper(addslashes($nomTipusPaper));
//$idTipusPaper = posar la id del select option que ha agafat.
        $agencia->afegirPaper(addslashes($projecte), addslashes($actor), addslashes($nomPaper), addslashes($tipusPaper));
        header('Location: ?ctl=actor&act=llistar');
    } else {
        echo 'error 1';
    }
} else {
    include 'view/header.php';
    include 'view/paper/formCrearPaper.php';
    include 'view/footer.php';
}