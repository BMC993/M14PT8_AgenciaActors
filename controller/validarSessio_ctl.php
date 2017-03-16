<?php

function validarSessio($nom, $pass) {
    $usuari = array('josep', 'josep');
    
    if ($nom == $usuari[0] && $pass == $usuari[1]) {
        return true;
    } else {
        return false;
    }
}

?>
