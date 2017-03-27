<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class agenciadb {

    public function __construct() {
        
    }

    public function cercarProjectes() {
        $query = "SELECT * FROM projecte;";
        $arrayDeProjectes = $this->consultarProjectes($query);
        return $arrayDeProjectes;
    }

    public function cercarTipusObres() {
        $query = "SELECT * FROM tipo_obra;";
        $arrayDeTipusObres = $this->consultarTipusObres($query);
        return $arrayDeTipusObres;
    }

    public function cercarActors() {
        $query = "SELECT * FROM actor;";
        $arrayDeActors = $this->consultarActors($query);
        return $arrayDeActors;
    }

    public function cercarDirectors() {
        $query = "SELECT * FROM director;";
//        $d = new directordb();
//        $arrayDeDirectors = $d->consultarDirectors($query);
        $arrayDeDirectors = $this->consultarDirectors($query);
        return $arrayDeDirectors;
    }

    public function cercarPapers() {
        $query = "SELECT * FROM papel;";
        $arrayDePapers = $this->consultarPapers($query);
        return $arrayDePapers;
    }

    public function cercarTipusPapers() {
        $query = "SELECT * FROM tipo_papel;";
        $arrayDeTipusPapers = $this->consultarTipusPapers($query);
        return $arrayDeTipusPapers;
    }

    public function eliminarTipusPapers($tipo_paper) {
        $query = "DELETE FROM tipo_papel WHERE id =" . $tipo_paper;
        $this->esborrarTipusPapers($query);
    }

    public function eliminarTipusObres($tipo_obra) {
        $query = "DELETE FROM tipo_obra WHERE id =" . $tipo_obra;
        $this->esborrarTipusObres($query);
    }

    public function consultarProjectes($query) {
        $con = new db();
        $con2 = $con->connect();
        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        $arrayProjectes = array();
        while ($row = mysqli_fetch_array($consulta)) {
            //FALTEN ROWS! CLAUS FORANES
            $projectes = new projecte($row["nom"], $row["descripcio"], $row["datainici"], $row["datafinal"]);
            $projectes->setId($row["id"]);
            $arrayProjectes[$cont] = $projectes;
            $cont++;
        }
        $con2->close();
        return $arrayProjectes;
    }

    public function consultarTipusObres($query) {
        $con = new db();
        $con2 = $con->connect();
        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        $arrayTipusObres = array();
        while ($row = mysqli_fetch_array($consulta)) {
            $tipusObres = new tipo_obra($row["tipo"]);
            $tipusObres->setId($row["id"]);
            $arrayTipusObres[$cont] = $tipusObres;
            $cont++;
        }
        $con2->close();
        return $arrayTipusObres;
    }

    public function consultarActors($query) {
        $con = new db();
        $con2 = $con->connect();
        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        $arrayActors = array();
        while ($row = mysqli_fetch_array($consulta)) {
            $actors = new actor($row["nif"], $row["nom"], $row["cognom"], $row["sexe"], $row["fotografia"]);
            $actors->setId($row["id"]);
            $arrayActors[$cont] = $actors;
            $cont++;
        }
        $con2->close();
        return $arrayActors;
    }

    public function consultarDirectors($query) {
        $con = new db();
        $con2 = $con->connect();
        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        $arrayDirectors = array();
        while ($row = mysqli_fetch_array($consulta)) {
            $directors = new director($row["nif"], $row["nom"], $row["cognom"]);
            $directors->setId($row["id"]);
            $arrayDirectors[$cont] = $directors;
            $cont++;
        }
        $con2->close();
        return $arrayDirectors;
    }

    public function consultarPapers($query) {
        $con = new db();
        $con2 = $con->connect();
        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        $arrayPapers = array();
        while ($row = mysqli_fetch_array($consulta)) {
            //FALTEN ROWS! CLAUS FORANES
            $papers = new paper($row["nom"]);
            $papers->setId($row["id"]);
            $arrayPapers[$cont] = $papers;
            $cont++;
        }
        $con2->close();
        return $arrayPapers;
    }

    public function consultarTipusPapers($query) {
        $con = new db();
        $con2 = $con->connect();
        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        $arrayTipusPapers = array();
        while ($row = mysqli_fetch_array($consulta)) {
            //FALTEN ROWS! CLAUS FORANES
            $tipusPapers = new tipo_paper($row["tipo"]);
            $tipusPapers->setId($row["id"]);
            $arrayTipusPapers[$cont] = $tipusPapers;
            $cont++;
        }
        $con2->close();
        return $arrayTipusPapers;
    }


    public function editarDirector($director) {
        $query = "UPDATE director SET nif = '" . $director->getNif() . "', nom = '" . $director->getNom() . "', cognom = '" . $director->getCognom() . "' WHERE id = " . $director->getId() . ";";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }
    
    public function esborrarTipusPapers($query) {
        $con = new db();
        $con2 = $con->connect();
        if ($con2->query($query) === FALSE) {
            echo "Error deleting record: " . $con2->error;
        }
        $con2->close();
    }

    public function esborrarTipusObres($query) {
        $con = new db();
        $con2 = $con->connect();
        if ($con2->query($query) === FALSE) {
            echo "Error deleting record: " . $con2->error;
        }
        $con2->close();
    }

//    public function populateVideoclubdb() {
//        $query = "SELECT * FROM pelicules;";
////        $p = new peliculadb();
//        $arrayDePelicules = $this->consultarPelicules($query);
//        return $arrayDePelicules;
//    }
//    
//    public function cercarDirectors(){
//        $query = "SELECT * FROM director;";
////        $d = new directordb();
////        $arrayDeDirectors = $d->consultarDirectors($query);
//        $arrayDeDirectors = $this->consultarDirectors($query);
//        return $arrayDeDirectors;
//    }
//    
//    public function cercarProductores(){
//        $query = "SELECT * FROM productora;";
////        $p = new peliculadb();
////        $arrayDeProductores = $p->consultarProductores($query);
//        $arrayDeProductores = $this->consultarProductores($query);
//        return $arrayDeProductores;
//    }
//    public function consultarPelicules($query) {
//        $con = new db();
//        $con2 = $con->connect();
//        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
//        $cont = 0;
//        while ($row = mysqli_fetch_array($consulta)) {
//            $pelicula = new pelicula($row["titol"], $row["director"], $row["productora"]);
//            $pelicula->setId($row["id"]);
//            $arrayPelicules[$cont] = $pelicula;
//            $cont++;
//        }
//        $con2->close();
//        //print_r($arrayLlibres);
//        return $arrayPelicules;
//    }
//
//    public function consultarDirectors($query) {
//        $con = new db();
//        $con2 = $con->connect();
//        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
//        $cont = 0;
//        while ($row = mysqli_fetch_array($consulta)) {
//            $directors = new director($row["nom"], $row["cognom"]);
//            $directors->setId($row["id"]);
//            $arrayDirectors[$cont] = $directors;
//            $cont++;
//        }
//        $con2->close();
//        return $arrayDirectors;
//    }
//
//    public function consultarProductores($query) {
//        $con = new db();
//        $con2 = $con->connect();
//        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
//        $cont = 0;
//        while ($row = mysqli_fetch_array($consulta)) {
//            $productores = new productora($row["nom"]);
//            $productores->setId($row["id"]);
//            $arrayProductores[$cont] = $productores;
//            $cont++;
//        }
//        $con2->close();
//        return $arrayProductores;
//    }
}

?>