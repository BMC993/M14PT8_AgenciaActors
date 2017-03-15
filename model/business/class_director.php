<?php

require_once("controller/function_AutoLoad.php");

class director {

    private $id;
    private $nom;
    private $cognom;
    
    public function __construct($nom, $cognom) {
        $this->setId(null);
        $this->setNom($nom);
        $this->setCognom($cognom);
    }
    public function getId() {
        return $this->id;
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

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCognom($cognom) {
        $this->cognom = $cognom;
    }

    
//    public function inserirPelicula() {
//        $peliculaDb = new peliculadb();
//        $peliculaDb->inserir($this);
//    }
}

?>