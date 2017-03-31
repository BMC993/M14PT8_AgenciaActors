<h2><?php echo $titol; ?></h2>
<div id="errorAfegirDirector"></div>
<form class="form-horizontal" id="formAfegirDirector" role="form" action="?ctl=director&act=crear" name="añadir" method="post">

    <div class="col-xs-12 col-sm-offset-3 col-sm-6">
        <div class="form-group">           
            <label class="control-label">Nom</label>
            <div>
                <input id="nomDirector" class="form-control" type="text" name="nom">       
            </div>
        </div>
        <div class="form-group">           
            <label class="control-label">Cognom</label>
            <div>
                <input id="cognomDirector" class="form-control" type="text" name="cognom" >       
            </div>
        </div>

        <div class="form-group">           
            <label class="control-label">DNI</label>
            <div>
                <input id="dniDirector" class=" form-control" type="text" name="nif" >       
            </div>
        </div>
        <div class="form-group">           
            <div class="text-center">
                <input class="btn btn-color" type="submit"  name="submit" value="   Afegir  " />      
            </div>
        </div>
    </div>
</form>