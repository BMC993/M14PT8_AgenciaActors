<?php

require_once("controller/function_AutoLoad.php");

class director {

    private $id;
    private $nif;
    private $nom;
    private $cognom;

    public function __construct($nif, $nom, $cognom) {
        $this->setId(null);
        $this->setNif($nif);
        $this->setNom($nom);
        $this->setCognom($cognom);
    }

    public function getId() {
        return $this->id;
    }

    function getNif() {
        return $this->nif;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getCognom() {
        return $this->cognom;
    }

    public function setId($id) {
        $this->id = $id;
    }

    function setNif($nif) {
        $this->nif = $nif;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCognom($cognom) {
        $this->cognom = $cognom;
    }
    
    public function showMe() {
        printSomething($this->getId(), $this->getNif(), $this->nom, $this->getCognom());
    }

    public function inserirDirector() {
        $directorDb = new directordb();
        $directorDb->inserir($this);
    }
    
}

?>