<?php
$arrayDeTipusObres = $agencia->recuperarTipusObres();
if (isset($_POST['submit'])) {
    if (isset($_REQUEST['id']) && isset($_REQUEST['nom'])) {
        $id = $_REQUEST['id'];
        $nom = $_REQUEST['nom'];

        $agencia->afegirTipoObra(addslashes($nom));
        header("Location: ?ctl=tipoObra&act=crear");
    } else {
        echo 'caca';
    }
} else {
    include 'view/header.php';
    include 'view/tipo_obra/llistarTipoObra.php';
    include 'view/tipo_obra/formTipoObra.php';
    include 'view/footer.php';
    
}
