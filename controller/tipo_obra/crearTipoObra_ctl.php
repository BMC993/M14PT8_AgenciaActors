<?php

$arrayDeTipusObres = $agencia->recuperarTipusObres();
if (isset($_SESSION['admin'])) {
    if (isset($_POST['submit'])) {
        if (/* isset($_REQUEST['id']) && */isset($_REQUEST['nom'])) {
//        $id = $_REQUEST['id'];
            $nom = $_REQUEST['nom'];

            $agencia->afegirTipoObra(addslashes($nom));
            header("Location: ?ctl=tipoObra&act=crear");
        } else {
            echo 'error';
        }
    } else {
        $titol = "Tipus Obres";
        include 'view/header.php';
        include 'view/tipo_obra/llistarTipoObra.php';
        include 'view/tipo_obra/formTipoObra.php';
        include 'view/footer.php';
    }
} else {
    $titol = "Login";
    include 'view/header.php';
    include 'view/user/formLogin.php';
    include 'view/footer.php';
}
