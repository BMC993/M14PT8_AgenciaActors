<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class paperdb {

    public function inserir($paper) {

        $query = "insert into papel values('', '" . $paper->getId_projecte() . "', '" . $paper->getId_actor() . "', '" . $paper->getNom() . "', '" . $paper->getTipus_paper() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}
