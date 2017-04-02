<?php

$agencia->eliminarTipoObra($id);
$arrayDeTipusObres = $agencia->recuperarTipusObres();

header("Location: ?ctl=tipoObra&act=crear");
