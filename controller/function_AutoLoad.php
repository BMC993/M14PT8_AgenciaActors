<?php

function __autoload($class_name) {
    $root = $_SERVER['DOCUMENT_ROOT'];
    $curdir = getcwd();
    //
    //
    $ruta = "$root/M14/M14PT8_AgenciaActors";
    //chdir("$root/josep/M14/M14PT8_AgenciaActors");
    //var_dump($ruta);
    
    chdir($ruta);
    
    //chdir("$root/XXX");


    $nomFile = "class_" . $class_name . ".php";
    $arxiuPersistence = "model/Persistence/" . $nomFile;
    $arxiuBusiness = "model/business/" . $nomFile;

    if (file_exists($arxiuPersistence)) {
        require_once $arxiuPersistence;
    } else {
        if (file_exists($arxiuBusiness)) {
            require_once $arxiuBusiness;
        }
    }
    chdir($curdir);
}

?>