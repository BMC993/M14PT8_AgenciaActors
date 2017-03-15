<?php

require_once("controller/function_AutoLoad.php");

class pelicula {

    private $id;
    private $titol;
    private $director;
    private $productora;

    public function __construct($titol_pelicula, $director_pelicula, $productora_pelicula) {
        $this->setId(null);
        $this->setTitol($titol_pelicula);
        $this->setDirector($director_pelicula);
        $this->setProductora($productora_pelicula);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getTitol() {
        return $this->titol;
    }

    public function setTitol($value) {
        $this->titol = $value;
    }

    public function getDirector() {
        return $this->director;
    }

    public function setDirector($value) {
        $this->director = $value;
    }

    public function getProductora() {
        return $this->productora;
    }

    public function setProductora($value) {
        $this->productora = $value;
    }

    public function inserirPelicula() {
        $peliculaDb = new peliculadb();
        $peliculaDb->inserir($this);
    }

}

?>