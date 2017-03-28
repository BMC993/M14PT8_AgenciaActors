<div class = "col-xs-12 text-center">
    <h2>Projectes</h2>
    <a href="?ctl=projecte&act=crear"><button class="btn btn-color">Afegir projecte</button></a>
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
            <?php foreach ($llistaProjectes as $projecte) { ?>
                <tr>
                    <td><img height = "100px" src = "<?php echo $projecte->getFotografia(); ?>"></td>
                    <td><?php echo $projecte->getNom(); ?> (<?php echo $projecte->getId_tipo_obra(); ?>)</td>
                    <td><a class = "rounded-icon" href = "?ctl=projecte&act=mostrar&param=<?php echo $projecte->getId(); ?>"><span class = "glyphicon glyphicon-eye-open icono"/></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>