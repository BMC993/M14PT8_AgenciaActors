<form class="form-horizontal" role="form" action="?ctl=director&act=editar" name="añadir" method="post">
    <input type="text" name="id" hidden="">
    <div class="col-xs-12 col-sm-6">

        <div class="form-group col-xs-12">           
            <label class="control-label">ID</label>
            <div>
                <input class="form-control" type="text" name="id" readonly="readonly" value="<php echo $d->getId'; ?>">       
            </div>
        </div>
        <div class="form-group col-xs-12">           
            <label class="control-label">Nom</label>
            <div>
                <input class="form-control" type="text" name="nom" value="<php echo $d->getNom'; ?>">       
            </div>
        </div>
        <div class="form-group col-xs-12">           
            <label class="control-label">Cognom</label>
            <div>
                <input class="form-control" type="text" name="cognom" value="<php echo $d->getCognom'; ?>">       
            </div>
        </div>

        <div class="form-group col-xs-12">           
            <label class="control-label">DNI</label>
            <div>
                <input class=" form-control" type="text" name="nif" value="<php echo $d->getNif'; ?>">       
            </div>
        </div>            
        <div class="form-group col-xs-12">           
            <div class="text-center">
                <input class="btn btn-color" type="submit"  name="submit" value="   Enviar  " />      
            </div>
        </div>
    </div>
</form>