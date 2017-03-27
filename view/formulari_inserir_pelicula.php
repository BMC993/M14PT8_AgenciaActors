<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ca" lang="ca">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <form action="../controller/controllerNovaPelicula.php" method='post'>
            Titol: <input type='text' name='titol' size='50'/>
            <br/>
            Director: <select name="director">
                <?php foreach ($arrayDirectors as $d) { ?>
                    <option value="<?php echo $d->getId(); ?>"><?php echo $d->getNom(); ?> <?php echo $d->getCognom();?></option>
                <?php } ?>
            </select>
            <br/>
            Productora: <select name="productora">
                <?php foreach ($arrayProductores as $projecte) { ?>
                    <option value="<?php echo $projecte->getId(); ?>"><?php echo $projecte->getNom(); ?></option>
                <?php } ?>
            </select>
            <br/>
            <input type='submit' name='submit' value='Envia' />
            <br/>
            <br/>
            <a href="../view/mostrar_pelicules.php">Veure totes les pel·licules</a>
        </form>
    </body>
</html>