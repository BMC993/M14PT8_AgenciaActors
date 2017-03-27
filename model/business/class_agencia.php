<?php

require_once("controller/function_AutoLoad.php");

class agencia {

    private $nom;
    private $arrayDeProjectes;
    private $arrayDeTipusObres;
    private $arrayDeActors;
    private $arrayDeDirectors;
    private $arrayDePapers;
    private $arrayDeTipusPapers;
    private $arrayDeUsers;

    public function __construct($nom) {
        $this->setNom($nom);
        $this->arrayDeProjectes = array();
        $this->arrayDeTipusObres = array();
        $this->arrayDeActors = array();
        $this->arrayDeDirectors = array();
        $this->arrayDePapers = array();
        $this->arrayDeTipusPapers = array();
        $this->arrayDeUsers = array();
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function populateAgencia() {
        $agenciadb = new agenciadb();
//        $arraydePelicules = $agenciadb->populateVideoclubdb();
        $this->arrayDeProjectes = $agenciadb->cercarProjectes();
        $this->arrayDeTipusObres = $agenciadb->cercarTipusObres();
        $this->arrayDeActors = $agenciadb->cercarActors();
        $this->arrayDeDirectors = $agenciadb->cercarDirectors();
        $this->arrayDePapers = $agenciadb->cercarPapers();
        $this->arrayDeTipusPapers = $agenciadb->cercarTipusPapers();
        $this->arrayDeUsers = $agenciadb->cercarUser();
//        return $arraydePelicules;
    }

    public function recuperarProjectes() {
        $agenciadb = new agenciadb();
        $arrayDeProjectes = $agenciadb->cercarProjectes();
        return $arrayDeProjectes;
    }

    public function recuperarTipusObres() {
        $agenciadb = new agenciadb();
        $arrayDeTipusObres = $agenciadb->cercarTipusObres();
        return $arrayDeTipusObres;
    }

    public function recuperarActors() {
        $agenciadb = new agenciadb();
        $arrayDeActors = $agenciadb->cercarActors();
        return $arrayDeActors;
    }

    public function recuperarDirectors() {
        $agenciadb = new agenciadb();
        $arrayDeDirectors = $agenciadb->cercarDirectors();
        return $arrayDeDirectors;
    }

    public function recuperarPapers() {
        $agenciadb = new agenciadb();
        $arrayDePapers = $agenciadb->cercarPapers();
        return $arrayDePapers;
    }

    public function recuperarTipusPapers() {
        $agenciadb = new agenciadb();
        $arrayDeTipusPapers = $agenciadb->cercarTipusPapers();
        return $arrayDeTipusPapers;
    }

    public function recuperarUser() {
        $agenciadb = new agenciadb();
        $arrayDeUsers = $agenciadb->cercarUser();
        return $arrayDeUsers;
    }

    public function afegirDirector($nif, $nom, $cognom) {

        $director = new director($nif, $nom, $cognom);
        $director->inserirDirector();
    }

    public function cercarDirector($idBuscar) {

        $director = null;
        foreach ($this->arrayDeDirectors as $d) {
            if ($idBuscar == $d->getId()) {
                $director = $d;
            }
        }
        return $director;
    }

    public function cercarTipoPaper($idBuscar) {
        $agenciadb = new agenciadb();
        $tipo_obra = null;
        foreach ($this->arrayDeTipusPapers as $d) {
            if ($idBuscar == $d->getId()) {
                $tipo_obra = $d;
            }
        }
        $agenciadb->eliminarTipusPapers($idBuscar);
    }

    public function cercarTipoObra($idBuscar) {
        $agenciadb = new agenciadb();
        $tipo_obra = null;
        foreach ($this->arrayDeTipusObres as $d) {
            if ($idBuscar == $d->getId()) {
                $tipo_obra = $d;
            }
        }
        $agenciadb->eliminarTipusObres($idBuscar);
    }

    public function afegirActor($nom, $cognom, $nif, $fotografia, $genere) {

        $actor = new actor($nif, $nom, $cognom, $genere, $fotografia);
        $actor->inserirActor();
    }

    public function afegirTipoObra($nom) {


        $tipo_obra = new tipo_obra($nom);
        $tipo_obra->inserirTipoObra();
    }

    public function afegirTipoPaper($nom) {


        $tipo_paper = new tipo_paper($nom);
        $tipo_paper->inserirTipoPaper();
    }

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
