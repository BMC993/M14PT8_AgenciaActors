<table>
    <tr>
        <th>
            Tipo
        </th>
    </tr>
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