<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class directordb {

    public function inserir($director) {

        $query = "insert into director values('', '" . $director->getNif() . "', '" . $director->getNom() . "', '" . $director->getCognom() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
