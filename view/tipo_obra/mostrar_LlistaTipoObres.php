<?php

function mostrarLlistaTipoObres() {
    $arrayTipoObres = $agencia->getArrayTipoObres();
    echo "<select name='tipo_obres'>";
    foreach ($arrayTipoObres as $tipo_obres) {
        echo "<option value='" . $tipo_obres->getTipo() . "'></option>";
    }
    echo "</select>";
}

?>