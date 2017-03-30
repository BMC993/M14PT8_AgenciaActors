<form class="form-horizontal" role="form" action="?ctl=projecte&act=editar&param=<?php echo $projecte->getId();?>" name="añadir" method="POST">
    <input type="text" name="id" hidden="">
    <div class="col-xs-12 col-sm-6">
        <div class="form-group">           
            <div class="col-xs-12">
                <label class="control-label">Nombre</label>
                <input class="form-control" type="text" name="nom" value="<?php echo $projecte->getNom();?>">       
            </div>
        </div>
        <div class="form-group">           
            <div class="col-xs-12">
                <label class="control-label">Descripcion</label>
                <input class="form-control" type="text" name="descripcio" value="<?php echo $projecte->getDescripcio();?>">       
            </div>
        </div>

        <div class="form-group">           
            <div class="col-xs-12">
                <label class="control-label">Tipo</label>
                <select class="form-control" type="text" name="tipus">
                    <?php
                    foreach ($arrayDeTipusObres as $tipo_obra) {
                        if ($tipo_obra->getId() == $tipoObraSelected) {
                            echo "<option value='" . $tipo_obra->getId() . "' selected>" . $tipo_obra->getTipo() ."</option>";
                        } else {
                             echo "<option value='" . $tipo_obra->getId() . "'>" . $tipo_obra->getTipo() ."</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <label class="control-label">Fecha inicio</label>
                <input class=" form-control" type="text" name="datainici" placeholder="DD/MM/YYYY" value="<?php echo $projecte->getDataIniciObject();?>">
            </div>
        </div>  
        <div class="form-group">
            <div class="col-xs-12">
                <label class="control-label">Fecha fin</label>
                <input class=" form-control" type="text" name="datafinal" placeholder="DD/MM/YYYY" value="<?php echo $projecte->getDataFinalObject();?>">       
            </div>
        </div>   
        <div class="form-group">
            <div class="col-xs-12">
                <label class="control-label">Director</label>
                <select class="form-control" name="idDirector">
                    <?php
                    foreach ($arrayDeDirectors as $director) {
                        if ($director->getId() == $directorSelected) {
                            echo "<option value='" . $director->getId() . "' selected>" . $director->getNom() . " " .  $director->getCognom(). "</option>";
                        } else {
                            echo "<option value='" . $director->getId() . "'>" . $director->getNom() . " " .  $director->getCognom(). "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div> 
        <div class="form-group">
            <div class="col-xs-12">
               <label class="control-label">Fotografia</label>
               <input class="form-control"  type="text" name="imagen" value="<?php echo $projecte->getFotografia();?>">
           </div>
       </div>
       <div class="form-group">           
        <div class="text-center col-xs-12">
            <input class="btn btn-color" type="submit"  name="submit" value="Enviar" />      
        </div>
    </div>
</div>
</form>