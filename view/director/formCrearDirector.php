<form class="form-horizontal" id="formDirector" role="form" action="?ctl=director&act=crear" name="añadir" method="post">
    <input type="text" name="id" hidden="">
    <div class="col-xs-12 col-sm-6">

        <div class="form-group col-xs-12">           
            <label class="control-label">Nom</label>
            <div>
                <input id="nomDirector" class="form-control" type="text" name="nom">       
            </div>
        </div>
        <div class="form-group col-xs-12">           
            <label class="control-label">Cognom</label>
            <div>
                <input id="cognomDirector" class="form-control" type="text" name="cognom" >       
            </div>
        </div>

        <div class="form-group col-xs-12">           
            <label class="control-label">DNI</label>
            <div>
                <input id="dniDirector" class=" form-control" type="text" name="nif" >       
            </div>
        </div>
        <div class="form-group col-xs-12">           
            <div class="text-center">
                <input class="btn btn-color" type="submit"  name="submit" value="   Enviar  " />      
            </div>
        </div>
    </div>
</form>