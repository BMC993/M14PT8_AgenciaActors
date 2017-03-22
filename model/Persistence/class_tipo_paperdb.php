<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class tipo_paperdb {

    public function inserir($tipo_paper) {

        $query = "insert into tipo_papel values('', '" . $tipo_paper->getTipo() ."');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
