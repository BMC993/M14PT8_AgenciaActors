<?php

$agencia->eliminarDirector($id);

header("Location: ?ctl=director&act=llistar");
