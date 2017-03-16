<?php

require_once("controller/function_AutoLoad.php");

class actor {

    private $id;
    private $nif;
    private $nom;
    private $cognom;
    private $sexe;
    private $fotografia;

    function __construct($nif, $nom, $cognom, $sexe, $fotografia) {
        $this->setId(null);
        $this->setNif($nif);
        $this->setNom($nom);
        $this->setCognom($cognom);
        $this->setSexe($sexe);
        $this->setFotografia($fotografia);
    }

//    public function __construct($titol_pelicula, $director_pelicula, $productora_pelicula) {
//        $this->setId(null);
//        $this->setTitol($titol_pelicula);
//        $this->setDirector($director_pelicula);
//        $this->setProductora($productora_pelicula);
//    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    function getNif() {
        return $this->nif;
    }

    function getNom() {
        return $this->nom;
    }

    function getCognom() {
        return $this->cognom;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getFotografia() {
        return $this->fotografia;
    }

    function setNif($nif) {
        $this->nif = $nif;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCognom($cognom) {
        $this->cognom = $cognom;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setFotografia($fotografia) {
        $this->fotografia = $fotografia;
    }

    public function showMe() {
        printSomething($this->getId(), $this->getNif(), $this->getNom(), $this->getCognom(), $this->getSexe(), $this->getFotografia());
    }

}

?>