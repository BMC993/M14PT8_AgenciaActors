<form class="form-horizontal" role="form" action="?ctl=actor&act=crear" name="añadir" method="post">
    <div class="col-xs-12 col-sm-6">

        <div class="form-group col-xs-12">           
            <label class="control-label">Nom</label>
            <div>
                <input id="nom_actor" class="form-control" type="text" name="nom">       
            </div>
        </div>

        <div class="form-group col-xs-12">           
            <label class="control-label">Cognom</label>
            <div>
                <input id="cognom_actor" class="form-control" type="text" name="cognom" >       
            </div>
        </div>
        
        <div class="form-group col-xs-12">           
            <label class="control-label">DNI</label>
            <div>
                <input id="dni_actor" class=" form-control" type="text" name="nif" >       
            </div>
        </div>
        
        <div class="form-group col-xs-12">           
            <label class="control-label">Fotografia</label>
            <div>
                <input id="foto_actor" class="form-control" type="text" name="fotografia" >       
            </div>
        </div>

        <div class="form-group col-xs-12"> 
            <label class="control-label">Genere</label><br>
            <div>
                Home<input name="genere_actor" class="form-control" type="radio" name="genere" value="Home"> 
                Dona<input name="genere_actor" class="form-control" type="radio" name="genere" value="Dona">
            </div>
        </div>

        <div class="form-group col-xs-12">           
            <div class="text-center">
                <input class="btn btn-color" type="submit"  name="submit" value="Enviar  " />      
            </div>
        </div>
    </div>
</form>