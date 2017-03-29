<div class = "col-xs-12 text-center">
    <h2>Projectes</h2>
    <?php if (isset($_SESSION['admin'])) { ?>
        <a href="?ctl=projecte&act=crear"><button class="btn btn-color">Afegir projecte</button></a>
        <?php } ?>
    </div>
    <div class = "table-responsive col-xs-8 col-xs-offset-2 col-sm-offset-2 col-sm-8 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
        <table class = "table table-hover">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Director</th>
                    <th class="text-center">Fechas</th>
                    <th class="text-center">Ver</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($llistaProjectes as $projecte) { ?>
                    <tr>
                        <td class="text-center"><strong class="col-xs-12"><?php echo $projecte->getTipoObra(); ?></strong><img height = "100px" src = "<?php echo $projecte->getFotografia(); ?>"></td>
                        <td class="text-center"><?php echo $projecte->getNom(); ?></td>
                        <td class="text-center"><?php echo $projecte->getDirector(); ?></td>
                        <td class="text-center"><?php echo $projecte->getDataIniciObject(); ?><br>-<br><?php echo $projecte->getDataFinalObject(); ?></td>
                        <td><a class = "rounded-icon" href = "?ctl=projecte&act=mostrar&param=<?php echo $projecte->getId(); ?>"><span class = "glyphicon glyphicon-eye-open icono"/></a></td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</div>