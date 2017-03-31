<h2><?php echo $titol; ?></h2>
<div id="errorAfegirActor"></div>
<form class="form-horizontal" id="formAfegirActor" role="form" action="?ctl=actor&act=crear" name="añadir" method="post">
    <div class="col-xs-12 col-sm-offset-3 col-sm-6">

        <div class="form-group">           
            <label class="control-label">Nom</label>
            <div>
                <input id="nomActor" class="form-control" type="text" name="nom">       
            </div>
        </div>

        <div class="form-group">           
            <label class="control-label">Cognom</label>
            <div>
                <input id="cognomActor" class="form-control" type="text" name="cognom" >       
            </div>
        </div>

        <div class="form-group">           
            <label class="control-label">DNI</label>
            <div>
                <input id="dniActor" class=" form-control" type="text" name="nif" >       
            </div>
        </div>

        <div class="form-group">           
            <label class="control-label">Fotografia</label>
            <div>
                <input id="fotoActor" class="form-control" type="text" name="fotografia" >       
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


<!--        <div class="form-group"> 
            <label class="control-label">Gènere</label><br>
            <div>
                Home<input name="genere_actor" class="form-control" type="radio" name="genere" value="Home"> 
                Dona<input name="genere_actor" class="form-control" type="radio" name="genere" value="Dona">
            </div>
        </div>-->

        <div class="form-group">           
            <div class="text-center">
                <input class="btn btn-color" type="submit"  name="submit" value="    Afegir  " />      
            </div>
        </div>
    </div>
</form>