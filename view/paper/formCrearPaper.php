<h2>Papers</h2>
<div id="errorAfegirPaper"></div>
<form class="form-horizontal" id="formAfegirPaper" role="form" action="?ctl=paper&act=crear&param=1" name="crearPapel" method="POST">
    <div class="form-group">
        <div class="col-xs-12">
            <label class="control-label">Actors</label>
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