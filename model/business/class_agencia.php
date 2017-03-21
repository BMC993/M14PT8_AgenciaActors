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
        
            
        $director = new director($nom, $cognom, $nif);
        $director->inserirDirector();
    
        
        
        
        
        
        
        
    }
}

?>