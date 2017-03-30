<?php

require_once("controller/function_AutoLoad.php");

class paper {

    private $id;
    private $id_projecte;
    private $id_actor;
    private $nom;
    private $tipus_paper;
    

    function __construct($id_projecte, $id_actor, $nom, $tipus_paper) {
        $this->setId(null);
        $this->setId_projecte($id_projecte);
        $this->setId_actor($id_actor);
        $this->setNom($nom);
        $this->setTipus_paper($tipus_paper);
    }

    function getId() {
        return $this->id;
    }

    function getId_projecte() {
        return $this->id_projecte;
    }
    
    function getProjecte(){
        $agencia = unserialize($_SESSION["agencia"]);
        $projecte = $agencia->cercarProjecte($this->id_projecte);
        if($projecte != null){
            return $projecte;
        }
    }

    function getId_actor() {
        return $this->id_actor;
    }

    function getTipus_paper() {
        return $this->tipus_paper;
    }

    function getNom() {
        return $this->nom;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_projecte($id_projecte) {
        $this->id_projecte = $id_projecte;
    }

    function setId_actor($id_actor) {
        $this->id_actor = $id_actor;
    }

    function setTipus_paper($tipus_paper) {
        $this->tipus_paper= $tipus_paper;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    public function showMe() {
        printSomething($this->getId(), $this->getId_projecte(), $this->getId_actor(), $this->getTipus_paper(), $this->getNom());
    }

//    public function populateVideoclub() {
//        $videoclubdb = new videoclubdb();
//        $arraydePelicules = $videoclubdb->populateVideoclubdb();
//        $this->arrayDeDirectors = $videoclubdb->cercarDirectors();
//        $this->arrayDeProductores = $videoclubdb->cercarProductores();
//        return $arraydePelicules;
//    }
//
//    public function afegirPelicula($titol, $director, $productora) {
//        $pelicula = new pelicula($titol, $director, $productora);
//        $pelicula->inserirPelicula();
//    }
//
//    public function recuperarDirectors() {
//        $videoclubdb = new videoclubdb();
//        $arraydeDirectors = $videoclubdb->cercarDirectors();
//        return $arraydeDirectors;
//    }
//
//    public function recuperarProductores() {
//        $videoclubdb = new videoclubdb();
//        $arraydeProductores = $videoclubdb->cercarProductores();
//        return $arraydeProductores;
//    }
//
//    public function cerarDirectorPerId($idBuscar) {
//        $director = null;
//        foreach ($this->arrayDeDirectors as $d) {
//            if ($idBuscar == $d->getId()) {
//                $director = $d;
//            }
//        }
//        return $director;
//    }
//
//    public function cerarProductoraPerId($idBuscar) {
//        $productora = null;
//        foreach ($this->arrayDeProductores as $p) {
//            if ($idBuscar == $p->getId()) {
//                $productora = $p;
//            }
//        }
//        return $productora;
//    }
}

?>