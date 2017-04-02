<div class="col-xs-12 text-center">
	<h2><?php echo $projecte->getNom(); ?></h2>
</div>
<div class="col-xs-10 col-xs-offset-1">
	<div class="area-proyecto col-xs-12">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-12">
			<?php if($projecte->getFotografia() != "") { ?>
				<img class="col-xs-12 img-proyecto" src="<?php echo $projecte->getFotografia(); ?>">
			<?php } else { ?>
				<img class="col-xs-12 img-proyecto" src="view/imatges/proyectos/not-found.png">
			<?php } ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 info-proyecto">
			<div>
				<strong>Descripción: </strong>
				<li><?php echo $projecte->getDescripcio(); ?></li>
			</div>
			<div>
				<strong>Tipo de obra: </strong>
				<li><?php echo $projecte->getTipoObra(); ?></li>
			</div>
			<div>
				<strong>Director: </strong>
				<li><?php echo $projecte->getDirector(); ?></li>
			</div>
			<div>
				<strong>Fechas: </strong>
				<li>Del <?php echo $projecte->getDataIniciObject(); ?> al <?php echo $projecte->getDataFinalObject(); ?></li>
			</div>
		</div>
	</div>
	<div class="col-xs-12 area-proyecto-actores">
		<?php
        foreach ($llistaTipusPapers as $tipusPaper) {
            $llistaActors = $agencia->recuperarActorsDeTipusPaper($tipusPaper->getId());
            ?>
            <div style="padding-top: 10px;">Tipus paper: <strong><?php echo $tipusPaper->getTipo(); ?></strong></div>
            <p>
            <?php
            foreach ($llistaPapers as $paper) {
                if ($tipusPaper->getId() == $paper->getTipus_paper()) {
                    $actor = $paper->getActor();
                    ?>
                        <a class="rounded" href="?ctl=actor&act=mostrar&param=<?php echo $actor->getId(); ?>">
                            <?php echo $actor->getNom(); ?> <?php echo $actor->getCognom(); ?></a> (<?php echo $paper->getNom(); ?>)
                    
                    <?php
                    if($paper == end($llistaPapers) || count($llistaPapers) <= 1) {
						echo ".";
					} else {
						echo ","; 
					}
                }
            }?>
            </p>
        <?php } ?>
	</div>
</div>