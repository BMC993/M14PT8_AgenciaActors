<?php

$agencia->eliminarTipoPaper($id);
$arrayDeTipusPapers = $agencia->recuperarTipusPapers();

include 'view/header.php';
include 'view/tipo_paper/mostrar_tipo_paper.php';
include 'view/tipo_paper/formTipoPaper.php';
include 'view/footer.php';
