<?php
if (isset($_POST['eliminar'])) {
    if (isset($_REQUEST['id']) && isset($_REQUEST['nom'])) {
        $id = $_REQUEST['id'];
        $nom = $_REQUEST['nom'];

        $agencia->afegirTipoPaper(addslashes($nom));
        //$videoclub->afegirPelicula(addslashes($_POST['titol']), addslashes($_POST['director']), addslashes($_POST['productora']));
    } else {
        echo 'caca';
    }
} else {
    include 'view/header.php';
    include 'view/tipo_paper/mostrar_tipo_paper.php';
    include 'view/tipo_paper/formTipoPaper.php';
    include 'view/footer.php';
    
}