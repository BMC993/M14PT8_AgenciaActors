<?php

$director = $agencia->cercarDirector($id);

if ($director != null) {
    $llistaProjectesDeDirector = $agencia->recuperarProjectesDeDirector($director->getId());
    include 'view/header.php';
    include 'view/director/mostrarDirector.php';
    include 'view/footer.php';
} else {
    include 'view/header.php';
    include 'view/error.php';
    include 'view/footer.php';
}
?>