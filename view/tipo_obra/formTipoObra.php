<form class="form-horizontal" role="form" action="?ctl=tipoObra&act=crear" name="añadir" method="post">
    <input type="text" name="id" hidden="">
    <div class="col-xs-12 col-sm-6">
        <?php if (isset($_SESSION['admin'])) { ?>
            <div class="form-group col-xs-12">           
                <label class="control-label">Nombre</label>
                <div>
                    <input class="form-control" type="text" name="nom">       
                </div>
            </div>

            <div class="form-group col-xs-12">           
                <div class="text-center">
                    <input class="btn btn-color" type="submit"  name="submit" value="   Enviar  " />      
                </div>
            </div>
        <?php } ?>
    </div>
</form>