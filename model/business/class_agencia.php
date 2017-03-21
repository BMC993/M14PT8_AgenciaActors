<?php

require_once("controller/function_AutoLoad.php");

class agencia {

    private $nom;

    public function __construct($nom) {
        $this->setNom($nom);
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function populateAgencia(){
        
    }
    
    public function afegirDirector($nom, $cognom, $nif){
        
        $director = new director($nif, $nom, $cognom);
        $director->inserirDirector();
    }
    
    public function afegirActor($nom, $cognom, $nif, $fotografia, $genere){
        
        $actor = new actor($nif, $nom, $cognom, $genere, $fotografia);
        $actor->inserirActor();
    }
}

?>