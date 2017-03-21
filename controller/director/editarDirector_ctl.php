<?php

if (isset($_POST['submit'])) {
    if (isset($_REQUEST['id']) && isset($_REQUEST['nif']) && isset($_REQUEST['nom']) && isset($_REQUEST['cognom'])) {
        $id = $_REQUEST['id'];
        $nom = $_REQUEST['nom'];
        $cognom = $_REQUEST['cognom'];
        $nif = $_REQUEST['nif'];

        $director = $agencia->cercarDirector($id);
        $agencia->editarDirector($director, addslashes($nif), addslashes($nom), addslashes($cognom));
    } else {
        echo 'caca';
    }
} else {
    
    include 'view/header.php';
    include 'view/director/formEditarDirector.php';
    include 'view/footer.php';
    
}
