<?php
foreach ($llistaTipusPapers as $tipusPaper) {
    $llistaActors = $agencia->recuperarActorsDeTipusPaper($tipusPaper->getId());
    ?>
    <div>Tipus paper: <strong><?php echo $tipusPaper->getTipo(); ?></strong></div>
    <?php
    foreach ($llistaPapers as $paper) {
        if ($tipusPaper->getId() == $paper->getTipus_paper()) {
            $actor = $paper->getActor();
            ?>
            <p>
                <a class="rounded" href="?ctl=actor&act=mostrar&param=<?php echo $actor->getId(); ?>">
                    <?php echo $actor->getNom(); ?> <?php echo $actor->getCognom(); ?></a> (<?php echo $paper->getNom(); ?>)
                    <a class="rounded-icon" href="#">
                        <span class="glyphicon glyphicon-remove icono"/>
                    </a>
                </p>
                <?php
            }
        }
    }
    ?>