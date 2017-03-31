<h2><?php echo $titol; ?></h2>
<div id="errorAfegirProjecte"></div>
<form class="form-horizontal" id="formAfegirProjecte" role="form" action="?ctl=projecte&act=crear" name="añadir" method="POST">
    <!--<input type="text" name="id" hidden="">-->
    <div class="col-xs-12 col-sm-offset-3 col-sm-6">
        <div class="form-group">
            <label class="control-label">Nom</label>
            <input id="nomProjecte" class="form-control" type="text" name="nom" >
        </div>
        <div class="form-group">
            <label class="control-label">Descripció</label>
            <input id="descripcioProjecte" class="form-control" type="text" name="descripcio">
        </div>

        <div class="form-group">
            <label class="control-label">Tipus</label>
            <select id="tipusProjecte" class="form-control" type="text" name="tipus">
                <?php
                foreach ($arrayDeTipusObres as $tipo_obra) {
                    echo "<option value='" . $tipo_obra->getId() . "'>" . $tipo_obra->getTipo() . "</option>";
                }
                ?>
            </select>
        </div>           
        <div class="form-group">
            <label class="control-label">Data inici</label>
            <input id="dataIniciProjecte" class=" form-control" type="text" name="datainici" placeholder="DD/MM/YYYY">
        </div>
        <div class="form-group">
            <label class="control-label">Data fi</label>
            <input id="dataFiProjecte" class=" form-control" type="text" name="datafinal" placeholder="DD/MM/YYYY">
        </div>
        <div class="form-group">
            <label class="control-label">Director</label>
            <select id="directorProjecte" class="form-control" name="idDirector">
                <?php
                foreach ($arrayDeDirectors as $director) {
                    echo "<option value='" . $director->getId() . "'>" . $director->getNom() . " " . $director->getCognom() . "</option>";
                }
                ?>
            </select>
        </div> 
        <div class="form-group">
            <label class="control-label">Fotografia</label>
            <input id="fotografiaProjecte" class="form-control"  type="text" name="imagen">
        </div>
        <div class="form-group">           
            <div class="text-center col-xs-12">
                <input class="btn btn-color" type="submit"  name="submit" value="Enviar" />      
            </div>
        </div>
    </div>
</form>