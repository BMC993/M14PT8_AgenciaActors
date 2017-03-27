<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            Tipo
        </th>
    </tr>
    <?php
    $cont = 0;
    
    foreach ($arrayDeTipusPapers as $value) {
        ?>
       <tr>
        <th><?php echo $value->getId();?></th>
        <th><?php echo $value->getTipo(); ?></th>
        <th><a href="?ctl=tipoPaper&act=eliminar&param=<?php echo $value->getId(); ?>" type="submit" class="btn red">Eliminar</a></th>
       </tr>

    <?php
    $cont++;
}
?>
</table>