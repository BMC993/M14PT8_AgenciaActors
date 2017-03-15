<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class videoclubdb {

//    private $pelicules;

    public function __construct() {
//        $pelicules = array();
    }

    public function populateVideoclubdb() {
        $query = "SELECT * FROM pelicules;";
//        $p = new peliculadb();
        $arrayDePelicules = $this->consultarPelicules($query);
        return $arrayDePelicules;
    }
    
    public function cercarDirectors(){
        $query = "SELECT * FROM director;";
//        $d = new directordb();
//        $arrayDeDirectors = $d->consultarDirectors($query);
        $arrayDeDirectors = $this->consultarDirectors($query);
        return $arrayDeDirectors;
    }
    
    public function cercarProductores(){
        $query = "SELECT * FROM productora;";
//        $p = new peliculadb();
//        $arrayDeProductores = $p->consultarProductores($query);
        $arrayDeProductores = $this->consultarProductores($query);
        return $arrayDeProductores;
    }
    
    public function consultarPelicules($query) {
        $con = new db();
        $con2 = $con->connect();
        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $pelicula = new pelicula($row["titol"], $row["director"], $row["productora"]);
            $pelicula->setId($row["id"]);
            $arrayPelicules[$cont] = $pelicula;
            $cont++;
        }
        $con2->close();
        //print_r($arrayLlibres);
        return $arrayPelicules;
    }
    
    public function consultarDirectors($query) {
        $con = new db();
        $con2 = $con->connect();
        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $directors = new director($row["nom"], $row["cognom"]);
            $directors->setId($row["id"]);
            $arrayDirectors[$cont] = $directors;
            $cont++;
        }
        $con2->close();
        return $arrayDirectors;
    }
    
    public function consultarProductores($query) {
        $con = new db();
        $con2 = $con->connect();
        $consulta = mysqli_query($con2, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $productores = new productora($row["nom"]);
            $productores->setId($row["id"]);
            $arrayProductores[$cont] = $productores;
            $cont++;
        }
        $con2->close();
        return $arrayProductores;
    }

}

?>