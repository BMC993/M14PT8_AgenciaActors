<form class="form-horizontal" role="form" action="?ctl=actor&act=editar&param=<?php if (isset($id)) {echo $id; } else { echo 0; } ?>" name="editar" method="post">
    <div class="col-xs-12 col-sm-6">

        <div class="form-group col-xs-12">           
            <label class="control-label">Nom</label>
            <div>
                <input id="nom_actor" class="form-control" type="text" name="nom" value="<?php echo $actor->getNom(); ?>">       
            </div>
        </div>

        <div class="form-group col-xs-12">           
            <label class="control-label">Cognom</label>
            <div>
                <input id="cognom_actor" class="form-control" type="text" name="cognom" value="<?php echo $actor->getCognom(); ?>">       
            </div>
        </div>

        <div class="form-group col-xs-12">           
            <label class="control-label">DNI</label>
            <div>
                <input id="dni_actor" class=" form-control" type="text" name="nif" value="<?php echo $actor->getNif(); ?>">       
            </div>
        </div>

        <div class="form-group col-xs-12">           
            <label class="control-label">Fotografia</label>
            <div>
                <input id="foto_actor" class="form-control" type="text" name="fotografia" value="<?php echo $actor->getFotografia(); ?>">       
            </div>
        </div>

        <div class="form-group col-xs-12"> 
            <label class="control-label">Genere</label><br>
            <div>
                Home<input name="genere_actor" class="form-control" type="radio" name="genere" value="Home" <?php if ($actor->getSexe() == "Home") { ?> checked="checked"<?php } ?>> 
                Dona<input name="genere_actor" class="form-control" type="radio" name="genere" value="Dona" <?php if ($actor->getSexe() == "Dona") { ?> checked="checked"<?php } ?>>
            </div>
        </div>

        <div class="form-group col-xs-12">           
            <div class="text-center">
                <input class="btn btn-color" type="submit"  name="submit" value="Enviar  " />      
            </div>
        </div>
    </div>
</form>