<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class_projecte
 *
 * @author bernabe
 */
class projecte {

    private $id;
    private $nom;
    private $descripcio;
    private $dataInici;
    private $dataFinal;
    private $id_director;
    private $fotografia;
    private $id_tipo_obra;

    function __construct($nom, $descripcio, $dataInici, $dataFinal, $id_director, $fotografia, $id_tipo_obra) {
        $this->setId(null);
        $this->setNom($nom);
        $this->setDescripcio($descripcio);
        $this->setDataInici($dataInici);
        $this->setDataFinal($dataFinal);
        $this->setId_director($id_director);
        $this->setFotografia($fotografia);
        $this->setId_tipo_obra($id_tipo_obra);
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getDescripcio() {
        return $this->descripcio;
    }

    function getDataInici() {
        return $this->dataInici;
    }

    function getDataFinal() {
        return $this->dataFinal;
    }

    function getId_director() {
        return $this->id_director;
    }

    function getFotografia() {
        return $this->fotografia;
    }

    function getId_tipo_obra() {
        return $this->id_tipo_obra;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
    }

    function setDataInici($dataInici) {
        $this->dataInici = $dataInici;
    }

    function setDataFinal($dataFinal) {
        $this->dataFinal = $dataFinal;
    }

    function setId_director($id_director) {
        $this->id_director = $id_director;
    }

    function setFotografia($fotografia) {
        $this->fotografia = $fotografia;
    }

    function setId_tipo_obra($id_tipo_obra) {
        $this->id_tipo_obra = $id_tipo_obra;
    }

    public function showMe() {
        printSomething($this->getId(), $this->getNom(), $this->getDescripcio(), $this->dataInici, $this->getDataFinal(), $this->getId_director(), $this->getFotografia(), $this->getId_tipo_obra());
    }

}
