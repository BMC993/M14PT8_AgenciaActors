<?php
$headerTitle = "Login";
include 'controller/validarUsuari_ctl.php';
if (isset($_REQUEST['login'])) {
    if (isset($_REQUEST['nom']) && isset($_REQUEST['pass'])) {
        if (validarUsuari($_REQUEST['nom'], $_REQUEST['pass'])) {
            $_SESSION["login"] = true;
            $_SESSION["usuari"] = $_REQUEST['nom'];
            require_once "controller/inici_ctl.php";
        } else {
            $_SESSION["usuari"] = "";
            session_unset("usuari");
            session_destroy();
            require_once "controller/inici_ctl.php";
        }
    } else {
        include 'view/header.php';
        include 'view/login.php';
        include 'view/footer.php';
    }
} else {
    include 'view/header.php';
    include 'view/login.php';
    include 'view/footer.php';
}
?>