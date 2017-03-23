<?php

if (isset($_POST['submit'])) {
    if (isset($_REQUEST['nif']) && isset($_REQUEST['nom']) && isset($_REQUEST['cognom'])) {
        
        $nom = $_REQUEST['nom'];
        $cognom = $_REQUEST['cognom'];
        $nif = $_REQUEST['nif'];

        $director = $agencia->cercarDirector($id);
        $agencia->editarDirector($director, addslashes($nif), addslashes($nom), addslashes($cognom));
    } else {
        echo 'caca';
    }
} else {
    
    $d = $agencia->cercarDirector($id);
    
    include 'view/header.php';
    include 'view/director/formEditarDirector.php';
    include 'view/footer.php';
    
}
