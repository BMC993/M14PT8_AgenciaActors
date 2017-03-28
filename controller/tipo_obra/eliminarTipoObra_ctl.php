<?php

$agencia->eliminarTipoObra($id);
$arrayDeTipusObres = $agencia->recuperarTipusObres();
//$videoclub->afegirPelicula(addslashes($_POST['titol']), addslashes($_POST['director']), addslashes($_POST['productora']));

header("Location: ?ctl=tipoObra&act=crear");
