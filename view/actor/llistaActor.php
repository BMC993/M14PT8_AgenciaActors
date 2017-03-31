<!--<div class="container">-->
    <!--<div class="row contingut table-responsive">-->
        <div class="col-xs-12 text-center">
            <h2><?php echo $titol; ?></h2>
            <?php if (isset($_SESSION['admin'])) { ?>
                <a href="?ctl=actor&act=crear"><button class="btn btn-color">Afegir actor</button></a>
            <?php } ?>
        </div>
        <?php foreach ($llistaActors as $data) { ?>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center llista">
                <div class="col-xs-12">
                    <strong><?php
                        echo $data->getNom()." ";
                        echo $data->getCognom();
                        ?></strong>
                    <div class="col-xs-12">
                        <?php echo $data->getNif(); ?>
                    </div>
                    <div class="col-xs-12">
                        <strong>Sexe: </strong><?php echo $data->getSexe(); ?>
                    </div>
                    <?php if ($data->getFotografia() != "") { ?>
                        <div class="col-xs-12 ">
                            <img class="img-llista" src="<?php echo $data->getFotografia(); ?>">
                        </div>
                    <?php } else { ?>
                        <div class="col-xs-12 ">
                            <?php if ($data->getSexe() == 'Home') { ?>
                                <img class="img-llista" src="view/imatges/actores/default-male.png">
                            <?php } else if ($data->getSexe() == 'Dona') { ?>
                                <img class="img-llista" src="view/imatges/actores/default-female.png">
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if (isset($_SESSION['admin'])) { ?>
                    <div class="col-xs-12 text-center">
                        <!--<div class="col-xs-offset-3">&nbsp;</div>-->
                        <div class="col-xs-offset-3 col-xs-2"><a class="rounded-icon" href="?ctl=actor&act=editar&param=<?php echo $data->getId(); ?>"><span class="glyphicon glyphicon-pencil icono"/></a></div>
                        <div class="col-xs-2"><a class="rounded-icon" href="?ctl=actor&act=eliminar&param=<?php echo $data->getId(); ?>"><span class="glyphicon glyphicon-remove icono"/></a></div>
                        <div class="col-xs-2"><a class="rounded-icon" href="?ctl=actor&act=mostrar&param=<?php echo $data->getId(); ?>"><span class="glyphicon glyphicon-eye-open icono"/></a></div>
                        <!--<div class="col-xs-offset-3">&nbsp;</div>-->
                    </div>
                <?php } else {
                    ?>
                    <div class = "col-xs-12">
                        <div class = "col-xs-4 col-xs-offset-4"><a class = "rounded-icon" href = "?ctl=actor&act=mostrar&param=<?php echo $data->getId(); ?>"><span class = "glyphicon glyphicon-eye-open icono"/></a></div>
                    </div>
                <?php } ?>
            </div>
            <?php
        }
        ?>
    <!--</div>-->
<!--</div>-->