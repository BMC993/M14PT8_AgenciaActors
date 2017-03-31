<h2><?php echo $titol; ?></h2>
<div id="errorEditarDirector"></div>
<form class="form-horizontal" id="formEditarDirector" role="form" action="?ctl=director&act=editar&param=<?php if (isset($id)){ echo $id; }else {echo 0;} ?>" name="añadir" method="post">
    <div class="col-xs-12 col-sm-offset-3 col-sm-6">

        <div class="form-group">           
            <label class="control-label">Nom</label>
            <div>
                <input id="nomDirector" class="form-control" type="text" name="nom" value="<?php echo $d->getNom(); ?>">       
            </div>
        </div>
        <div class="form-group">           
            <label class="control-label">Cognom</label>
            <div>
                <input id="cognomDirector" class="form-control" type="text" name="cognom" value="<?php echo $d->getCognom(); ?>">       
            </div>
        </div>

        <div class="form-group">           
            <label class="control-label">DNI</label>
            <div>
                <input id="dniDirector" class=" form-control" readonly="readonly" type="text" name="nif" value="<?php echo $d->getNif(); ?>">       
            </div>
        </div>            
        <div class="form-group">           
            <div class="text-center">
                <input class="btn btn-color" type="submit"  name="submit" value="   Enviar  " />      
            </div>
        </div>
    </div>
</form>