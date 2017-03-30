<?php
function crearCookie($nomCookie, $valorCookie) {
         setcookie($nomCookie, $valorCookie, time() + 3600, "/");
}
?>