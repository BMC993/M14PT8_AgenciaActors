<?php
    $agencia->eliminarTipoObra($id);
    $arrayDeTipusObres = $agencia->recuperarTipusObres();
    //$videoclub->afegirPelicula(addslashes($_POST['titol']), addslashes($_POST['director']), addslashes($_POST['productora']));

    include 'view/header.php';
    include 'view/tipo_obra/mostrar_tipo_obra.php';
    include 'view/tipo_obra/formTipoObra.php';
    include 'view/footer.php';
