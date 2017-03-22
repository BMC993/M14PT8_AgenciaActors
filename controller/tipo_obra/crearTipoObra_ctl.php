<?php

if (isset($_POST['submit'])) {
    if (isset($_REQUEST['id']) && isset($_REQUEST['nom'])) {
        $id = $_REQUEST['id'];
        $nom = $_REQUEST['nom'];

        $agencia->afegirTipoObra(addslashes($nom));
        //$videoclub->afegirPelicula(addslashes($_POST['titol']), addslashes($_POST['director']), addslashes($_POST['productora']));
    } else {
        echo 'caca';
    }
} else {
    include 'view/header.php';
    include 'view/tipo_obra/formTipoObra.php';
    include 'view/footer.php';
    
}
