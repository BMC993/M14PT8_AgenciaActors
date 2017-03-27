<div class="container">
    <div class="row contingut table-responsive">
        <div class="col-xs-12 text-center">
            <h2>Nuestros actores</h2>
            <a href="?ctl=actor&act=crear"><button class="btn btn-color">Afegir actor</button></a>
        </div>
        <?php foreach ($llistaActors as $data) { ?>
            <div class="col-xs-12 col-sm-6 text-center llista">
                <div class="col-xs-12">
                    <strong><?php
                        echo $data->getNom();
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
                <div class="col-xs-12">
                    <div class="col-xs-4"><a class="rounded-icon" href="?ctl=actor&act=editar"><span class="glyphicon glyphicon-pencil icono"/></a></div>
                    <div class="col-xs-4"><a class="rounded-icon" href="?ctl=actor&act=eliminar"><span class="glyphicon glyphicon-remove icono"/></a></div>
                    <div class="col-xs-4"><a class="rounded-icon" href="?ctl=actor&act=mostrar"><span class="glyphicon glyphicon-eye-open icono"/></a></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>