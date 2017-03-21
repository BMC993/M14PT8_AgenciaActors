<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class_actordb
 *
 * @author bernabe
 */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class actordb {

    public function inserir($actor) {

        $query = "insert into actor values('', '" . $actor->getNif() . "', '" . $actor->getNom() . "', '" . $actor->getCognom() . "', '" . $actor->getSexe() . "', '" . $actor->getFotografia() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}
