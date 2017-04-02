<?php
foreach ($llistaTipusPapers as $tipusPaper) {
    $llistaActors = $agencia->recuperarActorsDeTipusPaper($tipusPaper->getId());
    ?>
    <div style="padding-top: 10px;">Tipus paper: <strong><?php echo $tipusPaper->getTipo(); ?></strong></div>
    <?php
    foreach ($llistaPapers as $paper) {
        if ($tipusPaper->getId() == $paper->getTipus_paper()) {
            $actor = $paper->getActor();
            ?>
            <p>
                <a class="rounded" href="?ctl=actor&act=mostrar&param=<?php echo $actor->getId(); ?>">
                    <?php echo $actor->getNom(); ?> <?php echo $actor->getCognom(); ?></a> (<?php echo $paper->getNom(); ?>)
                    <a class="rounded-icon" id="eliminarPaper<?php echo $paper->getId(); ?>" onclick="javascript:eliminarPaper('eliminarPaper<?php echo $paper->getId(); ?>')" value="?ctl=paper&act=eliminar&param=<?php echo $paper->getId(); ?>">
                        <span class="glyphicon glyphicon-remove icono"/>
                    </a>
                </p>
                <?php
            }
        }
    }
    ?>