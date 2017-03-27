<?php

$arrayDeTipusObres = $agencia->recuperarTipusObres();
$arrayDeTipusPapers = $agencia->recuperarTipusPapers();

require_once 'view/header.php';
require_once 'view/paginaPrincipal.php';
require_once 'view/footer.php';
