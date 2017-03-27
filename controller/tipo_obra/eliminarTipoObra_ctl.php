<?php
    $agencia->eliminarTipoObra($id);
    //$videoclub->afegirPelicula(addslashes($_POST['titol']), addslashes($_POST['director']), addslashes($_POST['productora']));

    include 'view/header.php';
    include 'view/tipo_paper/mostrar_tipo_obra.php';
    include 'view/tipo_paper/formTipoObra.php';
    include 'view/footer.php';
