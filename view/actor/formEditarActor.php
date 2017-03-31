<h2><?php echo $titol; ?></h2>
<div id="errorEditarActor"></div>
<form class="form-horizontal" id="formEditarActor" role="form" action="?ctl=actor&act=editar&param=<?php if (isset($id)) {echo $id; } else { echo 0; } ?>" name="editar" method="post">
    <div class="col-xs-12 col-sm-offset-3 col-sm-6">

        <div class="form-group">           
            <label class="control-label">Nom</label>
            <div>
                <input id="nomActor" class="form-control" type="text" name="nom" value="<?php echo $actor->getNom(); ?>">       
            </div>
        </div>

        <div class="form-group">           
            <label class="control-label">Cognom</label>
            <div>
                <input id="cognomActor" class="form-control" type="text" name="cognom" value="<?php echo $actor->getCognom(); ?>">       
            </div>
        </div>

        <div class="form-group">           
            <label class="control-label">DNI</label>
            <div>
                <input id="dniActor" class=" form-control" readonly="readonly" type="text" name="nif" value="<?php echo $actor->getNif(); ?>">       
            </div>
        </div>

        <div class="form-group">           
            <label class="control-label">Fotografia</label>
            <div>
                <input id="fotoActor" class="form-control" type="text" name="fotografia" value="<?php echo $actor->getFotografia(); ?>">       
            </div>
        </div>

        <fieldset class="form-group">
            <label class="control-label">Gènere</label><br>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="genere" value="Home" checked>
                Home
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="genere" value="Dona">
                Dona
            </div>
        </fieldset>

        <div class="form-group col-xs-12">           
            <div class="text-center">
                <input class="btn btn-color" type="submit"  name="submit" value="Enviar  " />      
            </div>
        </div>
    </div>
</form>