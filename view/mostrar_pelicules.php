<?php
require_once("../controller/function_AutoLoad.php");
require_once("../config/config.inc.php");
require_once("../config/db.inc.php");

if (isset($_SESSION['videoclub'])) {
    $videoclub = unserialize($_SESSION['videoclub']);
} else {
    $videoclub = New videoclub("Videoclub Josep");
}
$arrayPelicules = $videoclub->populateVideoclub();
?>
<table border="1">
    <?php
    $cont = 0;
    $director = null;
    $productora = null;
    while ($cont < count($arrayPelicules)) {
        ?>		
        <tr><td><b>Pel·licula num: </td> <td><?php echo $arrayPelicules[$cont]->getId(); ?></td></tr>
        <tr><td>Titol: </td><td><?php echo $arrayPelicules[$cont]->getTitol(); ?></td></tr>
        <tr><td>Director: </td><td>
            <?php 
            $director = $videoclub->cerarDirectorPerId($arrayPelicules[$cont]->getDirector());
            echo $director->getNom(); ?> <?php echo $director->getCognom();
//            echo $arrayPelicules[$cont]->getDirector();
            ?>
            </td></tr>
        <tr><td>Productora: </td><td>
            <?php 
            $productora = $videoclub->cerarProductoraPerId($arrayPelicules[$cont]->getProductora());
            echo $productora->getNom();
//            echo $arrayPelicules[$cont]->getDirector();
            ?>
            </td></tr>
        <?php
        $cont++;
    }
    ?>
</table>