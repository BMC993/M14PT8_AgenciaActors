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

    /* ------------------------------POPULATE-------------------------------- */

    public function populateAgencia() {
        $agenciadb = new agenciadb();
        $this->arrayDeProjectes = $agenciadb->cercarProjectes();
        $this->arrayDeTipusObres = $agenciadb->cercarTipusObres();
        $this->arrayDeActors = $agenciadb->cercarActors();
        $this->arrayDeDirectors = $agenciadb->cercarDirectors();
        $this->arrayDePapers = $agenciadb->cercarPapers();
        $this->arrayDeTipusPapers = $agenciadb->cercarTipusPapers();
        $this->arrayDeUsers = $agenciadb->cercarUser();
    }

    /* ------------------------RECUPERAR (tot l'array)----------------------- */

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

    /* --------------RECUPERAR ARRAY PER ID (d'una clau forana)-------------- */

    public function recuperarProjectesDeDirector($idDirector) {
        $agenciadb = new agenciadb();
        $projectesDeDirectors = $agenciadb->cercarProjectesDeDirector($idDirector);
        return $projectesDeDirectors;
    }

    public function recuperarPapersDeActor($idActor) {
        $agenciadb = new agenciadb();
        $papersDeActors = $agenciadb->cercarPapersDeActor($idActor);
        return $papersDeActors;
    }

    public function recuperarPapersDeProjectes($idProjecte) {
        $agenciadb = new agenciadb();
        $papersDeProjecte = $agenciadb->cercarPapersDeProjecte($idProjecte);
        return $papersDeProjecte;
    }
    
    public function recuperarActorDePaper($idActor) {
        $agenciadb = new agenciadb();
        $actorDePaper = $agenciadb->cercarActorDePaper($idActor);
        return $actorDePaper;
    }

    public function recuperarPapersDeTipusPaper($idTipusPaper) {
        $agenciadb = new agenciadb();
        $papersDeTipusPaper = $agenciadb->cercarPapersDeTipusPaper($idTipusPaper);
        return $papersDeTipusPaper;
    }

    public function recuperarActorsDeTipusPaper($idTipusPaper) {

        $actors = array();
        foreach ($this->arrayDeActors as $a) {
            foreach ($this->arrayDePapers as $p) {
                if ($a->getId() == $p->getId_actor() && $p->getTipus_paper() == $idTipusPaper) {
                    array_push($actors, $a);
                }
            }
        }

        return $actors;
    }
    
    public function getNomPaperDeActor($idActor){
        foreach ($this->arrayDePapers as $p) {
            if ($p->getId_actor() == $idActor) {
                $nomPaper = $p->getNom();
            }
        }
        return $nomPaper;
    }

    /* ---------------CERCAR (recuperar objecte per la ID)------------------- */

    public function cercarDirector($idBuscar) {
        $director = null;
        foreach ($this->arrayDeDirectors as $d) {
            if ($idBuscar == $d->getId()) {
                $director = $d;
            }
        }
        return $director;
    }

    public function cercarProjecte($idBuscar) {
        $projecte = null;
        foreach ($this->arrayDeProjectes as $p) {
            if ($idBuscar == $p->getId()) {
                $projecte = $p;
            }
        }
        return $projecte;
    }

    public function cercarActor($idBuscar) {
        $a = null;
        foreach ($this->arrayDeActors as $actor) {
            if ($idBuscar == $actor->getId()) {
                $a = $actor;
            }
        }
        return $a;
    }

    public function cercarTipoObra($idBuscar) {
        $tipoObra = null;
        foreach ($this->arrayDeTipusObres as $tipusObra) {
            if ($idBuscar == $tipusObra->getId()) {
                $tipoObra = $tipusObra;
            }
        }
        return $tipoObra;
    }

    public function cercarTipoPaper($idBuscar) {
        $tipoPaper = null;
        foreach ($this->arrayDeTipusPapers as $tipusPaper) {
            if ($idBuscar == $tipusPaper->getId()) {
                $tipoPaper = $tipusPaper;
            }
        }
        return $tipoPaper;
    }

    /* ---------------------------AGEFIR (new)------------------------------- */

    public function afegirDirector($nif, $nom, $cognom) {

        $director = new director($nif, $nom, $cognom);
        $director->inserirDirector();
    }

    public function afegirActor($nom, $cognom, $nif, $fotografia, $genere) {

        $actor = new actor($nif, $nom, $cognom, $genere, $fotografia);
        $actor->inserirActor();
    }

    public function afegirProjecte($nom, $descripcio, $tipus, $dataInici, $dataFi, $idDirector, $imagen) {
        $projecte = new projecte($nom, $descripcio, $tipus, $dataInici, $dataFi, $idDirector, $imagen);
        $projecte->inserirProjecte();
    }

    public function afegirTipoObra($nom) {

        $tipo_obra = new tipo_obra($nom);
        $tipo_obra->inserirTipoObra();
    }

    public function afegirPaper($idProjecte, $idActor, $nomPaper, $idTipusPaper) {

        $paper = new paper($idProjecte, $idActor, $nomPaper, $idTipusPaper);
        $paper->inserirPaper();
    }

    public function afegirTipoPaper($nom) {

        $tipo_paper = new tipo_paper($nom);
        $tipo_paper->inserirTipoPaper();
    }

    /* ------------------------ELIMINAR (delete)---------------------------- */

    public function eliminarDirector($idDirector) {
        $agenciadb = new agenciadb();
        $agenciadb->eliminarDirector($idDirector);
    }

    public function eliminarProjecte($idProjecte) {
        $agenciadb = new agenciadb();
        $agenciadb->eliminarProjecte($idProjecte);
    }

    public function eliminarActor($idActor) {
        $agenciadb = new agenciadb();
        $agenciadb->eliminarActor($idActor);
    }
    
    public function eliminarPaper($idPaper) {
        $agenciadb = new agenciadb();
        $agenciadb->eliminarPaper($idPaper);
    }

    public function eliminarTipoPaper($idBuscar) {
        $agenciadb = new agenciadb();
        $agenciadb->eliminarTipusPapers($idBuscar);
    }

    public function eliminarTipoObra($idBuscar) {
        $agenciadb = new agenciadb();
        $agenciadb->eliminarTipusObres($idBuscar);
    }


    /* ------------------------------EDITAR---------------------------------- */

    public function editarDirector($director, $nif, $nom, $cognom) {
        $director->setNif($nif);
        $director->setNom($nom);
        $director->setCognom($cognom);

        $agenciadb = new agenciadb();
        $agenciadb->editarDirector($director);
    }

    public function editarActor($actor, $nif, $nom, $cognom, $fotografia, $genere) {
        $actor->setNif($nif);
        $actor->setNom($nom);
        $actor->setCognom($cognom);
        $actor->setFotografia($fotografia);
        $actor->setSexe($genere);

        $agenciadb = new agenciadb();
        $agenciadb->editarActor($actor);
    }

    public function editarProjecte($projecte, $nom, $descripcio, $dataInici, $dataFi, $idDirector, $imagen, $idTipusObra) {

        $projecte->setNom($nom);
        $projecte->setDescripcio($descripcio);
        $projecte->setDataInici($dataInici);
        $projecte->setDataFinal($dataFi);
        $projecte->setId_director($idDirector);
        $projecte->setFotografia($imagen);
        $projecte->setId_tipo_obra($idTipusObra);

        $agenciadb = new agenciadb();
        $agenciadb->editarProjecte($projecte);
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
