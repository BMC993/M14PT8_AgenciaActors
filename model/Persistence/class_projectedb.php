<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class projectedb {

    public function inserir($projecte) {
    	
        $query = "insert into projecte values('', '" . $projecte->getNom() . "', '" . $projecte->getDescripcio() . "', '" . date_format($projecte->getDataInici(), 'Y/m/d') . "', '" . date_format($projecte->getDataFinal(), 'Y/m/d') . "', '" . $projecte->getId_director() . "', '" . $projecte->getFotografia() . "', '" . $projecte->getId_tipo_obra() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
