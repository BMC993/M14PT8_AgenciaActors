<h2 style="text-align: left;">Tipus Papers</h2>
<div id="errorAfegirTipusPaper"></div>
<table>
    <?php
    $cont = 0;

    foreach ($arrayDeTipusPapers as $value) {
        ?>
        <tr>
            <th><?php echo $value->getTipo(); ?></th>
            <?php if (isset($_SESSION['admin'])) { ?>
                <th><a href="?ctl=tipoPaper&act=eliminar&param=<?php echo $value->getId(); ?>" type="submit" class="btn red">Eliminar</a></th>
                <?php } ?>
        </tr>

        <?php
        $cont++;
    }
    ?>
</table>