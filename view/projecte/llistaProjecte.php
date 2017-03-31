<div class = "col-xs-12 text-center">
    <h2><?php echo $titol; ?></h2>
    <?php if (isset($_SESSION['admin'])) { ?>
        <a href="?ctl=projecte&act=crear"><button class="btn btn-color">Afegir projecte</button></a>
    <?php } ?>
</div>
<div class = "table-responsive col-xs-12">
    <table class = "table table-hover">
        <thead>
            <tr>
                <th class="text-center"></th>
                <th class="text-center">Nom</th>
                <th class="text-center">Director</th>
                <th class="text-center">Dates</th>
                <th class="text-center">Editar</th>
                <th class="text-center">Eliminar</th>
                <th class="text-center">Veure</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($llistaProjectes as $projecte) { ?>
                <tr>
                    <td class="text-center"><strong class="col-xs-12"><?php echo $projecte->getTipoObra(); ?></strong><img height = "100px" src = "<?php echo $projecte->getFotografia(); ?>"></td>
                    <td class="text-center"><?php echo $projecte->getNom(); ?></td>
                    <td class="text-center"><?php echo $projecte->getDirector(); ?></td>
                    <td class="text-center"><?php echo $projecte->getDataIniciObject(); ?><br>-<br><?php echo $projecte->getDataFinalObject(); ?></td>
                    <td class="text-center"><a class = "rounded-icon" href = "?ctl=projecte&act=editar&param=<?php echo $projecte->getId(); ?>"><span class = "glyphicon glyphicon-pencil icono"/></a></td>
                    <td class="text-center"><a class = "rounded-icon" href = "?ctl=projecte&act=eliminar&param=<?php echo $projecte->getId(); ?>"><span class = "glyphicon glyphicon-remove icono"/></a></td>
                    <td class="text-center"><a class = "rounded-icon" href = "?ctl=projecte&act=mostrar&param=<?php echo $projecte->getId(); ?>"><span class = "glyphicon glyphicon-eye-open icono"/></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>