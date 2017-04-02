<div class="">
    <h2><?php echo $actor->getNom(); ?> <?php echo $actor->getCognom(); ?></h2>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 center-block">
    <?php if ($actor->getFotografia() == null) { ?>
        <img class="img-responsive" src="<?php echo $actor->getFotografia(); ?>">
        <?php if ($actor->getSexe() == 'Home') { ?>

            <img class="img-responsive" src="view/imatges/actores/default-male.png">
        <?php } else if ($actor->getSexe() == 'Dona') { ?>
            <img class="img-responsive" src="view/imatges/actores/default-female.png">
        <?php } ?>
    <?php } else { ?>
        <img class="img-responsive" src="<?php echo $actor->getFotografia(); ?>">
    <?php } ?>
    <br/>
    <br/>
    <strong>DNI: </strong><?php echo $actor->getNif(); ?><br>
    <br/>
    <strong>Sexe: </strong><?php echo $actor->getSexe(); ?><br>
    <br/>
</div>	
<div class="table-responsive col-xs-12 col-sm-9 col-md-9 col-lg-9">
    <table class="table table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Projecte</th>
                <th>Paper</th>
                <th>Tipus paper</th>
                <th>Veure</th>
            </tr>
        </thead>
        <tbody>

            <!--acabar aixo!-->

            <?php if($llistaPapers != null){
                foreach ($llistaPapers as $paper) { 
                $projecte = $paper->getProjecte();?>
                <tr>
                <!--{% for proyecto in proyectos %}
                {% if proyecto.id == papel.idProjecte.id %}-->
                <td><img height="100px" src="<?php echo $projecte->getFotografia(); ?>"></td>
                <td><?php echo $projecte->getNom(); ?></td>
                <td><?php echo $paper->getNom();?></td>
                <td><?php echo $paper->getNomTipus_paper(); ?></td>
                <td><a class="rounded-icon" href="?ctl=projecte&act=mostrar&param=<?php echo $projecte->getId(); ?>"><span class="glyphicon glyphicon-eye-open icono"/></a></td>
                    <?php } ?>
            </tr>
                    <?php }else{ ?>
            <tr>
                <td colspan="7" class="text-center">Sin resultados</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>