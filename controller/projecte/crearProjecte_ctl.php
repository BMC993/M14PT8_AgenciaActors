<?php
if (isset($_SESSION['admin'])) {
if (isset($_POST['submit'])) {
    if (isset($_REQUEST['nom']) && isset($_REQUEST['descripcio']) && isset($_REQUEST['tipus']) && isset($_REQUEST['datainici']) && isset($_REQUEST['datafinal']) && isset($_REQUEST['idDirector'])) {
        
        $nom = $_REQUEST['nom'];
        $descripcio = $_REQUEST['descripcio'];
        $idTipusObra = $_REQUEST['tipus'];
        $dataInici = $_REQUEST['datainici'];
        if ($dataInici != NULL) {
            $dataInici = date_create_from_format ( "d/m/Y" , $dataInici );
        } else {
            $dataInici = date_create_from_format ( "d/m/Y" , "0/0/0" );
        }

        $dataFi = $_REQUEST['datafinal'];

        if ($dataFi != NULL) {
            $dataFi = date_create_from_format ( "d/m/Y" , $dataFi );
        } else {
            $dataFi = date_create_from_format ( "d/m/Y" , "0/0/0" );
        }
        
        $idDirector = $_REQUEST['idDirector'];
        $director = $agencia->cercarDirector($idDirector);
        $imagen = $_REQUEST['imagen'];

        $agencia->afegirProjecte(addslashes($nom), addslashes($descripcio),  $dataInici, $dataFi, addslashes($idDirector), addslashes($imagen), addslashes($idTipusObra));
    }
    header("Location: ?ctl=projecte&act=llistar");
} else {
    $arrayDeTipusObres = $agencia->recuperarTipusObres();
    $arrayDeDirectors = $agencia->recuperarDirectors();
    $titol = "Afegir projecte";
    include 'view/header.php';
    include 'view/projecte/formProjecte.php';
    include 'view/footer.php';
}
}
else{
   $titol = "Login";
    include 'view/header.php';
    include 'view/user/formLogin.php';
    include 'view/footer.php'; 
}
