<?php

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
class obra {

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

}
