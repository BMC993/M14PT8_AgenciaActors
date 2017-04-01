<?php 

$agencia->eliminarPaper($id);

header("Location: ?ctl=paper&act=llistar");

?>