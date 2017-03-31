<?php

$directors = $agencia->recuperarDirectors();

$titol = "Els nostres directors";

include 'view/header.php';
include 'view/director/llistarDirector.php';
include 'view/footer.php';

?>