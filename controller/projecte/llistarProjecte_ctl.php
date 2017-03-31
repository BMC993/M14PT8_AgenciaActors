<?php
include 'view/header.php';

$llistaProjectes = $agencia->recuperarProjectes();
    
$titol = "Projectes";

include 'view/projecte/llistaProjecte.php';

include 'view/footer.php';

?>