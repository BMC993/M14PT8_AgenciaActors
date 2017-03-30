<?php

if (isset($_POST['submit'])) {
    if (isset($_REQUEST['nom']) && isset($_REQUEST['cognom']) && isset($_REQUEST['nif']) && isset($_REQUEST['fotografia']) && isset($_REQUEST['genere'])) {
        $nom = $_REQUEST['nom'];
        $cognom = $_REQUEST['cognom'];
        $nif = $_REQUEST['nif'];
        $fotografia = $_REQUEST['fotografia'];
        $genere = $_REQUEST['genere'];

        $actor = $agencia->cercarActor($id);
        $agencia->editarActor($actor, addslashes($nif), addslashes($nom), addslashes($cognom), addslashes($fotografia), addslashes($genere));
        
        header('Location: ?ctl=actor&act=llistar');
    }
} else {
    $actor = $agencia->cercarActor($id);
    include 'view/header.php';
    include 'view/actor/formEditarActor.php';
    include 'view/footer.php';
}
?>
