<?php 

$agencia->eliminarProjecte($id);

header("Location: ?ctl=projecte&act=llistar");

?>