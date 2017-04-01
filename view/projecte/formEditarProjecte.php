<h2><?php echo $titol; ?></h2>
<div id="errorEditarProjecte"></div>
<div class="col-xs-12 col-sm-6">
    <form class="form-horizontal" id="formEditarProjecte" role="form" action="?ctl=projecte&act=editar&param=<?php echo $projecte->getId(); ?>" method="POST">
        <!--    <input type="text" name="id" hidden="">-->

        <div class="form-group">
            <label class="control-label">Nombre</label>
            <input id="nomProjecte" class="form-control" type="text" name="nom" value="<?php echo $projecte->getNom(); ?>">
        </div>
        <div class="form-group">
            <label class="control-label">Descripcion</label>
            <input id="descripcioProjecte" class="form-control" type="text" name="descripcio" value="<?php echo $projecte->getDescripcio(); ?>">
        </div>

        <div class="form-group">
            <label class="control-label">Tipo</label>
            <select id="tipusProjecte" class="form-control" type="text" name="tipus">
                <?php
                foreach ($arrayDeTipusObres as $tipo_obra) {
                    if ($tipo_obra->getId() == $tipoObraSelected) {
                        echo "<option value='" . $tipo_obra->getId() . "' selected>" . $tipo_obra->getTipo() . "</option>";
                    } else {
                        echo "<option value='" . $tipo_obra->getId() . "'>" . $tipo_obra->getTipo() . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label">Fecha inicio</label>
            <input id="dataIniciProjecte" class=" form-control" type="text" name="datainici" placeholder="DD/MM/YYYY" value="<?php echo $projecte->getDataIniciObject(); ?>">
        </div>  
        <div class="form-group">
            <label class="control-label">Fecha fin</label>
            <input id="dataFiProjecte" class=" form-control" type="text" name="datafinal" placeholder="DD/MM/YYYY" value="<?php echo $projecte->getDataFinalObject(); ?>">
        </div>   
        <div class="form-group">
            <label class="control-label">Director</label>
            <select id="directorProjecte" class="form-control" name="idDirector">
                <?php
                foreach ($arrayDeDirectors as $director) {
                    if ($director->getId() == $directorSelected) {
                        echo "<option value='" . $director->getId() . "' selected>" . $director->getNom() . " " . $director->getCognom() . "</option>";
                    } else {
                        echo "<option value='" . $director->getId() . "'>" . $director->getNom() . " " . $director->getCognom() . "</option>";
                    }
                }
                ?>
            </select>
        </div> 
        <div class="form-group">
            <label class="control-label">Fotografia</label>
            <input id="fotografiaProjecte" class="form-control"  type="text" name="imagen" value="<?php echo $projecte->getFotografia(); ?>">
        </div>
        <div class="form-group">           
            <div class="text-center col-xs-12">
                <input class="btn btn-color" type="submit"  name="submit" value="Enviar" />      
            </div>
        </div>




    </form>
</div>


<div class="col-xs-12 col-sm-5 col-sm-offset-1">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
    <form class="form-horizontal" role="form" aaction="?ctl=paper&act=crear&param=<?php echo $projecte->getId(); ?>" name="crearPapel" method="POST">
            <div class="form-group">   
                <div class="col-xs-12">
                    <label class="control-label">Nombre papel</label>
                    <select class="form-control" name="actor">
                    <?php
                        foreach ($llistaActors as $actor) {
                            echo "<option value='" . $actor->getId() . "' >" . $actor->getNom() . " " . $actor->getCognom() . "</option>";
                        }
                    ?>
                    </select>     
                </div>      
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <label class="control-label">Nombre papel</label>
                    <input class="form-control" type="text" name="nombrePapel">
                </div>
            </div>    
            <div class="form-group">
                <div class="col-xs-12">
                    <label class="control-label">Tipo papel</label>
                    <select class="form-control" name="tipusPaper">
                    <?php
                        foreach ($arrayDeTipusPapers as $tipusPaper) {
                            echo "<option value='" . $tipusPaper->getId() . "' >" . $tipusPaper->getTipo() . "</option>";
                        }
                    ?>
                    </select>   
                </div>
            </div> 
            <div class="form-group">           
                <div class="text-center col-xs-12">
                    <input class="btn btn-color" type="submit" value="Añadir papel" />      
                </div>
            </div>
        </form>
    </div>
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
        <strong>Papeles principales:</strong>
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
        {% endfor %}
    </div>
</div>