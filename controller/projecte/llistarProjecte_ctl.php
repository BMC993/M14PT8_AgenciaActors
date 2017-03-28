<?php
include 'view/header.php';

$llistaProjectes = $agencia->recuperarProjectes();
    
include 'view/projecte/llistaProjecte.php';

include 'view/footer.php';

?>