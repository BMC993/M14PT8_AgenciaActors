<?php
    $agencia->cercarTipoPaper($id);
    //$videoclub->afegirPelicula(addslashes($_POST['titol']), addslashes($_POST['director']), addslashes($_POST['productora']));

    include 'view/header.php';
    include 'view/tipo_paper/mostrar_tipo_paper.php';
    include 'view/tipo_paper/formTipoPaper.php';
    include 'view/footer.php';
