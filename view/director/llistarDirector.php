<div class="col-xs-12 text-center">
    <h2><?php echo $titol; ?></h2>
    <?php if (isset($_SESSION['admin'])) { ?>
        <a href="?ctl=director&act=crear"><button class="btn btn-color">Afegir director</button></a>
    <?php } ?>
</div>
<div class="table-responsive col-xs-12">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Cognom</th>
                <th>DNI</th>
                <?php if (isset($_SESSION['admin'])) { ?>
                    <th class="text-center">Editar</th>
                    <th class="text-center">Eliminar</th>
                <?php } ?>
                <th class="text-center">Veure</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($directors as $d) { ?>
                <tr>
                    <td><?php echo $d->getNom(); ?></td>
                    <td><?php echo $d->getCognom(); ?></td>
                    <td><?php echo $d->getNif(); ?></td>
                    <?php if (isset($_SESSION['admin'])) { ?>
                        <td class="text-center"><a class="rounded-icon" href="?ctl=director&act=editar&param=<?php echo $d->getId(); ?>"><span class="glyphicon glyphicon-pencil icono"/></a></td>
                        <td class="text-center"><a class="rounded-icon" href="?ctl=director&act=eliminar&param=<?php echo $d->getId(); ?>"><span class="glyphicon glyphicon-remove icono"/></a></td>
                    <?php } ?>
                    <td class="text-center"><a class="rounded-icon" href="?ctl=director&act=mostrar&param=<?php echo $d->getId(); ?>"><span class="glyphicon glyphicon-eye-open icono"/></a></td>
                </tr>
                <!--{% else %}-->
    <!--                <tr>
                    <td colspan="7" class="text-center">Sin resultados</td>
                </tr>-->
            <?php } ?>
        </tbody>
    </table>
</div>