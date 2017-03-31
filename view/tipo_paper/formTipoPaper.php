<br/><br/>
<h4>Afegir un nou tipus de paper:</h4>
<form class="form-horizontal" id="formAfegirTipusPaper" role="form" action="?ctl=tipoPaper&act=crear" name="añadir" method="post">
    <input type="text" name="id" hidden="">
    <div class="col-xs-12 col-sm-6">
        <?php if (isset($_SESSION['admin'])) { ?>
            <div class="form-group col-xs-12">           
                <label class="control-label">Nom paper:</label>
                <div>
                    <input id="nomTipusPaper"  class="form-control" type="text" name="nom">       
                </div>
            </div>
            <div class="form-group col-xs-12">           
                <div class="text-center">
                    <input class="btn btn-color" type="submit"  name="submit" value="   Afegir  " />      
                </div>
            </div>
        <?php } ?>
    </div>
</form>