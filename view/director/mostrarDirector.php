<div class = "col-xs-12 text-center">
    <h2><?php echo $director->getNom(); ?> <?php echo $director->getCognom(); ?></h2>
    <strong>DNI: </strong><?php echo $director->getNif(); ?>
</div>
<div class = "table-responsive col-xs-8 col-xs-offset-2 col-sm-offset-2 col-sm-8 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
    <table class = "table table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Proyecto</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($llistaProjectesDeDirector as $projecte) { ?>
                <tr>
                    <td>
                        <?php if($projecte->getFotografia() != "") { ?>
                            <img height = "100px" src = "<?php echo $projecte->getFotografia(); ?>">
                        <?php } else { ?>
                            <img height = "100px" style="border:2px solid #770e0e;" src = "view/imatges/proyectos/not-found.png">
                        <?php } ?>
                    </td>
                    <td><strong><?php echo $projecte->getNom(); ?></strong> (<?php echo $projecte->getTipoObra(); ?>)</td>
                    <td><a class = "rounded-icon" href = "?ctl=projecte&act=mostrar&param=<?php echo $projecte->getId(); ?>"><span class = "glyphicon glyphicon-eye-open icono"/></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>