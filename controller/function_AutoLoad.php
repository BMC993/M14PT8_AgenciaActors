<?php

function __autoload($class_name) {
    $root = $_SERVER['DOCUMENT_ROOT'];
    $curdir = getcwd();
    //
    //
    ///M14/M14PT8_AgenciaActors
    //josep/M14/M14PT8_AgenciaActors
<<<<<<< Updated upstream
    chdir("$root/M14/M14PT8_AgenciaActors");
=======
    chdir("$root/bernabe/M14/PT8");
>>>>>>> Stashed changes

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