<?php 
include "mostrar_LlistaTipoObres.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ca" lang="ca">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<form action="?ctl=tipoObra&act=cercar" method='post'>
			 <table border='1' cellpadding='2' cellspacing='2'>
				 <tr>
					 <td>Titol</td>
					 <td><input type='text' name='titol' size='50'/></td>
				 </tr>
				 <tr>
					 <td>Autor</td>
					 <td><?php mostrarLlistaTipoObres(); ?></td>
				 </tr>
				 <tr>
					<td>Editorial</td>
					<td><input type='text' name='editorial' size='50' /></td>
				</tr>
			</table><br/>
			<input type='submit' name='submit' value='Envia' />
			<br/>
		</form>
	</body>
</html>
