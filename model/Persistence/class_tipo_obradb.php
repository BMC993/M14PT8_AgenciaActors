<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class tipo_obradb {

    public function inserir($tipo_obra) {

        $query = "insert into tipo_obra values('', '" . $tipo_obra->getTipo() ."');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
