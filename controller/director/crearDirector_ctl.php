<?php

if (isset($_POST['submit'])) {
    if (isset($_REQUEST['nom']) && isset($_REQUEST['cognom']) && isset($_REQUEST['nif'])) {
        
        $nom = $_REQUEST['nom'];
        $cognom = $_REQUEST['cognom'];
        $nif = $_REQUEST['nif'];

        $agencia->afegirDirector(addslashes($nif), addslashes($nom), addslashes($cognom));
        
        header("Location: ?ctl=director&act=llistar");
        
    } else {
        echo 'error';
    }
} else {
    $titol = "Afegir director";
    include 'view/header.php';
    include 'view/director/formCrearDirector.php';
    include 'view/footer.php';
    
}
