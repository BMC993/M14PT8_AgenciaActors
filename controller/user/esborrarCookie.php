<?php
function esborrarCookie($nomCookie) {
	if (isset($_COOKIE[$nomCookie])) {
         setcookie($nomCookie, "", time() - 3600, "/");
	}
}
?>