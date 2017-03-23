
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
            <?php foreach ($proyecto as $p) { ?>
                <tr>
                    <td><img height = "100px" src = "<?php echo $p->getFotografia(); ?>"></td>
                    <td><?php echo $p->getNom(); ?> (<?php echo $p->getId_tipo_obra(); ?>)</td>
                    <td><a class = "rounded-icon" href = "?ctl=projecte&act=mostrar&param=<?php echo $p->getId_tipo_obra(); ?>"><span class = "glyphicon glyphicon-eye-open icono"/></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>