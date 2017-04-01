<h2><?php echo $titol; ?></h2>
<div id="errorEditarProjecte"></div>
<div class="col-xs-12 col-sm-6">
    <form class="form-horizontal" id="formEditarProjecte" role="form" action="?ctl=projecte&act=editar&param=<?php echo $projecte->getId(); ?>" method="POST">
        <!--    <input type="text" name="id" hidden="">-->

        <div class="form-group">
            <label class="control-label">Nom</label>
            <input id="nomProjecte" class="form-control" type="text" name="nom" value="<?php echo $projecte->getNom(); ?>">
        </div>
        <div class="form-group">
            <label class="control-label">Descripció</label>
            <input id="descripcioProjecte" class="form-control" type="text" name="descripcio" value="<?php echo $projecte->getDescripcio(); ?>">
        </div>

        <div class="form-group">
            <label class="control-label">Tipus</label>
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
            <label class="control-label">Data inici</label>
            <input id="dataIniciProjecte" class=" form-control" type="text" name="datainici" placeholder="DD/MM/YYYY" value="<?php echo $projecte->getDataIniciObject(); ?>">
        </div>  
        <div class="form-group">
            <label class="control-label">Data fi</label>
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
        <form class="form-horizontal" id="formAfegirPaper" role="form" action="?ctl=paper&act=crear&param=<?php echo $projecte->getId(); ?>" name="crearPapel" method="POST">
            <div class="form-group">
                <div class="col-xs-12">
                    <label class="control-label">Actor</label>
                    <select id="idActor" class="form-control" name="idActor">
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
                    <label class="control-label">Nom paper</label>
                    <input id="nomPaper" class="form-control" type="text" name="nomPaper">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <label class="control-label">Tipus paper</label>
                    <select id="idTipusPaper" class="form-control" name="idTipusPaper">
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
                    <input class="btn btn-color" id="afegirPaper" type="submit" name="submit" value="Afegir paper" />
                </div>
            </div>
        </form>
    </div>
    <div id="llistaPapers" class="col-xs-12 col-sm-10 col-sm-offset-1">
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
                        <a class="rounded-icon" id="eliminarPaper" href="?ctl=paper&act=eliminar&param=<?php echo $paper->getId(); ?>">
                            <span class="glyphicon glyphicon-remove icono"/>
                        </a>
                    </p>
                    <?php
                }
            }
        }
        ?>
    </div>
</div>
<script>
    $("#formAfegirPaper").submit(function () {
        afegirPaper('formAfegirPaper');
        return false;
    });
    $("#eliminarPaper").click(function () {
        eliminarPaper('eliminarPaper');
        return false;
    });

    function peticioAjax(url, metodo, funcion, param) {
        $.ajax({
            method: metodo,
            url: url,
            data: param,
            success: function (data) {
                funcion(data);
            }
        });
    }

    function afegirPaper(nomForm) {
        form = document.getElementById(nomForm);
        formVacio = comprobarCampos(form);
        action = form.action;
        data = $("#" + nomForm).serialize();
        if (formVacio == false) {
            peticioAjax(action, "POST", recarregarPapers, data);
        }
    }

    function recarregarPapers(data) {
        if (data == true) {
            mostrarSuccess("errorEditarProjecte", "S'ha afegit el paper correctament!");
            peticioAjax("?ctl=paper&act=llistar", "GET", llistarPapers, "param=" +<?php echo $projecte->getId(); ?>);
        } else {
            mostrarError("errorEditarProjecte", "Informació incorrecta!");
        }
    }

    function llistarPapers(data) {
        $('#llistaPapers').html(data);
    }

    function comprobarCampos(form) {
        elementoVacio = false;
        for (i = form.elements.length - 1; i >= 0; i--) {
            if (form.elements[i].value == "" && form.elements[i].type != "submit") {
                form.elements[i].focus();
                elementoVacio = true;
            }
        }
        return elementoVacio;
    }
    ;

    function eliminarPaper(id) {
        var ruta = $("#" + id).attr('href');
        peticioAjax(ruta, "POST", recarregarPapersEnEliminar);
    }

    function recarregarPapersEnEliminar(data) {
//        if (data == true) {
        mostrarSuccess("errorEditarProjecte", "S'ha eliminat el paper correctament!");
        peticioAjax("?ctl=paper&act=llistar", "GET", llistarPapers, "param=" +<?php echo $projecte->getId(); ?>);
//        } else {
//            mostrarError("errorEditarProjecte", "Informació incorrecta!");
//        }
    }

</script>