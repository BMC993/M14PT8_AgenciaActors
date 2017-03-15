<?php

require_once("controller/function_AutoLoad.php");

class videoclub {

    private $nameLib;
    private $arrayDeDirectors;
    private $arrayDeProductores;

    public function __construct($nameLib) {
        $this->setNameLib($nameLib);
        $this->arrayDeDirectors = array();
        $this->arrayDeProductores = array();
    }

    public function getNameLib() {
        return $this->nameLib;
    }

    public function setNameLib($value) {
        $this->nameLib = $value;
    }

    function getArrayDeDirectors() {
        return $this->arrayDeDirectors;
    }

    function getArrayDeProductores() {
        return $this->arrayDeProductores;
    }

    function setArrayDeDirectors($arrayDeDirectors) {
        $this->arrayDeDirectors = $arrayDeDirectors;
    }

    function setArrayDeProductores($arrayDeProductores) {
        $this->arrayDeProductores = $arrayDeProductores;
    }

    public function populateVideoclub() {
        $videoclubdb = new videoclubdb();
        $arraydePelicules = $videoclubdb->populateVideoclubdb();
        $this->arrayDeDirectors = $videoclubdb->cercarDirectors();
        $this->arrayDeProductores = $videoclubdb->cercarProductores();
        return $arraydePelicules;
    }

    public function afegirPelicula($titol, $director, $productora) {
        $pelicula = new pelicula($titol, $director, $productora);
        $pelicula->inserirPelicula();
    }

    public function recuperarDirectors() {
        $videoclubdb = new videoclubdb();
        $arraydeDirectors = $videoclubdb->cercarDirectors();
        return $arraydeDirectors;
    }

    public function recuperarProductores() {
        $videoclubdb = new videoclubdb();
        $arraydeProductores = $videoclubdb->cercarProductores();
        return $arraydeProductores;
    }

    public function cerarDirectorPerId($idBuscar) {
        $director = null;
        foreach ($this->arrayDeDirectors as $d) {
            if ($idBuscar == $d->getId()) {
                $director = $d;
            }
        }
        return $director;
    }
    
    public function cerarProductoraPerId($idBuscar) {
        $productora = null;
        foreach ($this->arrayDeProductores as $p) {
            if ($idBuscar == $p->getId()) {
                $productora = $p;
            }
        }
        return $productora;
    }

}

?>