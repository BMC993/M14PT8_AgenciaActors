<?php

require_once("controller/function_AutoLoad.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tipo_obra
 *
 * @author bernabe
 */
class tipo_paper {

    private $id;
    private $tipo;

    function __construct($tipo) {
        $this->setId(null);
        $this->setTipo($tipo);
    }

    function getId() {
        return $this->id;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function showMe() {
        printSomething($this->getId(), $this->getTipo());
    }

    public function getArrayTipoPaper() {
        return $this->arrayTipoPaper;
    }

    public function inserirTipoPaper() {
        $tipo_paperDb = new tipo_paperdb();
        $tipo_paperDb->inserir($this);
    }

    public function eliminarTipoPaper() {
        $tipo_paperDb = new tipo_paperdb();
        $tipo_paperDb->eliminar($this);
    }

}
