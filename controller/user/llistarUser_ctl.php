<?php

if (isset($_POST['submit'])) {
    if (isset($_REQUEST['user']) && isset($_REQUEST['password'])) {

        $username = $_REQUEST['user'];
        $password = $_REQUEST['password'];

        $arrayDeUsers = $agencia->recuperarUser();

        foreach ($arrayDeUsers as $value) {
            if (strcmp($value->getUsername(), $username) == 0 && strcmp($value->getPassword(), $password) == 0) {
                $_SESSION['admin'] = $value->getUsername();
                include 'view/header.php';
                include 'view/paginaPrincipal.php';
                include 'view/footer.php';
            } else {
                include 'view/header.php';
                include 'view/user/formLogin.php';
                include 'view/footer.php';
            }
        }
    }
} else {

    include 'view/header.php';
    include 'view/user/formLogin.php';
    include 'view/footer.php';
}
?>