<?php

require_once("controller/function_AutoLoad.php");

class productora {

    private $id;
    private $nom;

    public function __construct($nom) {
        $this->setId(null);
        $this->setNom($nom);
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

//    public function inserirPelicula() {
//        $peliculaDb = new peliculadb();
//        $peliculaDb->inserir($this);
//    }
}

?>