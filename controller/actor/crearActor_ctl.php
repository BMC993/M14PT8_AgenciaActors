<?php

if (isset($_POST['submit'])) {
    if  (isset($_REQUEST['nom']) && isset($_REQUEST['cognom']) && isset($_REQUEST['nif']) && isset($_REQUEST['fotografia']) && isset($_REQUEST['genere'])) {
        $nom = $_REQUEST['nom'];
        $cognom = $_REQUEST['cognom'];
        $nif = $_REQUEST['nif'];
        $fotografia = $_REQUEST['fotografia'];
        $genere = $_REQUEST['genere'];

        $agencia->afegirActor(addslashes($nom), addslashes($cognom), addslashes($nif), addslashes($fotografia), addslashes($genere));
        header('Location: ?ctl=actor&act=llistar');
    } else {
        echo 'caca';
    }
} else {
    include 'view/header.php';
    include 'view/actor/formCrearActor.php';
    include 'view/footer.php';
    
}
