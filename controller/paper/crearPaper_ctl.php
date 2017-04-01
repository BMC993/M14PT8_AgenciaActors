<?php

if (isset($_REQUEST['idActor']) && isset($_REQUEST['nomPaper']) && isset($_REQUEST['idTipusPaper'])) {

    $idActor = $_REQUEST['idActor'];
    $nomPaper = $_REQUEST['nomPaper'];
    $idTipusPaper = $_REQUEST['idTipusPaper'];

    $agencia->afegirPaper(addslashes($id), addslashes($idActor), addslashes($nomPaper), addslashes($idTipusPaper));

    echo true;
} else {
    echo false;
}
