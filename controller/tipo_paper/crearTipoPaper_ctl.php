<?php

$arrayDeTipusPapers = $agencia->recuperarTipusPapers();
if (isset($_SESSION['admin'])) {
    if (isset($_POST['submit'])) {
        if (isset($_REQUEST['nom'])) {
            $nom = $_REQUEST['nom'];

            $agencia->afegirTipoPaper(addslashes($nom));
            header("Location: ?ctl=tipoPaper&act=crear");
        } else {
            echo 'error';
        }
    } else {
        include 'view/header.php';
        include 'view/tipo_paper/mostrar_tipo_paper.php';
        include 'view/tipo_paper/formTipoPaper.php';
        include 'view/footer.php';
    }
} else {
    $titol = "Login";
    include 'view/header.php';
    include 'view/user/formLogin.php';
    include 'view/footer.php';
}
