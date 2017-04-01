<div class="col-xs-12 col-sm-10 col-sm-offset-1">

    <?php
    foreach ($llistaTipusPapers as $tipusPaper) {
//        $llistaPapers = $agencia->recuperarPapersDeTipusPaper($tipusPaper->getId());
        $llistaActors = $agencia->recuperarActorsDeTipusPaper($tipusPaper->getId());
        ?>
        Tipus paper: <strong><?php echo $tipusPaper->getTipo(); ?></strong>
        <?php
        foreach ($llistaActors as $actor) {
//            $actor = $agencia->recuperarActorDePaper($paper->getId_actor());
            ?>

            <p>
                <a class="rounded" href="?ctl=actor&act=mostrar&param=<?php echo $actor->getId(); ?>">
                    <?php echo $actor->getNom(); ?> <?php $actor->getCognom(); ?></a> (<?php echo $agencia->getNomPaperDeActor($actor->getId()); ?>)
                <a class="rounded-icon" href="#">
                    <span class="glyphicon glyphicon-remove icono"/>
                </a>
            </p>






        <?php } ?>
    <?php } ?>

    <p>
        <a class="rounded" href="?ctl=actor&act=mostrar&param=<?php echo $actor->getId(); ?>">
            <?php echo $actor->getNom();
            echo $actor->getCognom();
            ?></a> (<?php echo $actor->getNom(); ?>)
        <a class="rounded-icon" href="{{path('backend_eliminar_papel', {idProyecto:id, idPapel:papel.id})}}">
            <span class="glyphicon glyphicon-remove icono"/>
        </a>
    </p>
<!--<td colspan="7" class="text-center">Sin resultados</td>-->


<!--    <strong>Papeles principales:</strong>
    {% for papel in papeles %}
    {% if papel.tipusPaper == "Primario" %}
    <p><a class="rounded" href="{{path('backend_formulario_actor', {id:papel.idActor.id})}}">{{papel.idActor.nom}} {{papel.idActor.cognom}}</a> ({{papel.nom}}) <a class="rounded-icon" href="{{path('backend_eliminar_papel', {idProyecto:id, idPapel:papel.id})}}"><span class="glyphicon glyphicon-remove icono"/></a></p>
    {% endif %}
    {% endfor %}
    <br>
    <strong>Papeles secundarios:</strong>
    {% for papel in papeles %}
    {% if papel.tipusPaper == "Secundario" %}
    <p><a class="rounded" href="{{path('backend_formulario_actor', {id:papel.idActor.id})}}">{{papel.idActor.nom}} {{papel.idActor.cognom}}</a> ({{papel.nom}}) <a class="rounded-icon" href="{{path('backend_eliminar_papel', {idProyecto:id, idPapel:papel.id})}}"><span class="glyphicon glyphicon-remove icono"/></a></p>
    {% endif %}
    {% endfor %}-->
</div>