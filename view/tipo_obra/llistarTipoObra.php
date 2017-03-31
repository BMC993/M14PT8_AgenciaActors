<h2 style="text-align: left;"><?php echo $titol; ?></h2>
<div id="errorAfegirTipusObra"></div>
<table>
    <?php
    $cont = 0;

    foreach ($arrayDeTipusObres as $value) {
        ?>
        <tr>
            <th><?php echo $value->getTipo(); ?></th>
            <?php if (isset($_SESSION['admin'])) { ?>
                <th><a href="?ctl=tipoObra&act=eliminar&param=<?php echo $value->getId(); ?>" type="submit" class="btn red">Eliminar</a></th>
                <?php } ?>
        </tr>

        <?php
        $cont++;
    }
    ?>
</table>