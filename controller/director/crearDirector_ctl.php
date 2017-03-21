<?php

if (isset($_POST['submit'])) {
    if (isset($_REQUEST['nom']) && isset($_REQUEST['cognom']) && isset($_REQUEST['nif'])) {
        
        $nom = $_REQUEST['nom'];
        $cognom = $_REQUEST['cognom'];
        $nif = $_REQUEST['nif'];

        $agencia->afegirDirector(addslashes($nom), addslashes($cognom), addslashes($nif));
        //$videoclub->afegirPelicula(addslashes($_POST['titol']), addslashes($_POST['director']), addslashes($_POST['productora']));
    } else {
        echo 'caca';
    }
} else {
    
    include 'view/header.php';
    include 'view/director/formCrearDirector.php';
    include 'view/footer.php';
    
}
