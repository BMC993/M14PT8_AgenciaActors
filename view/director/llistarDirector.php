<div class = "col-xs-12 text-center">
    <a href="?ctl=director&act=crear">Crear Director</a>
    <a href="?ctl=director&act=editar">Editar Director</a>
</div>


<div class="col-xs-12 text-center">
    <h2>Els nostres directors</h2>
    <a href="?ctl=director&act=crear"><button class="btn btn-color">Afegir director</button></a>
</div>
<div class="table-responsive col-xs-10 col-xs-offset-1 col-sm-offset-1 col-sm-10 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Cognom</th>
                <th>DNI</th>
                <th class="text-center">Editar</th>
                <th class="text-center">Eliminar</th>
                <th class="text-center">Veure</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($directors as $d) { ?>
                <tr>
                    <td><?php echo $d->getNom(); ?></td>
                    <td><?php echo $d->getCognom(); ?></td>
                    <td><?php echo $d->getNif(); ?></td>
                    <td class="text-center"><a class="rounded-icon" href="?ctl=director&act=editar&param=<?php echo $d->getId(); ?>"><span class="glyphicon glyphicon-pencil icono"/></a></td>
                    <td class="text-center"><a class="rounded-icon" href="?ctl=director&act=eliminar&param=<?php echo $d->getId(); ?>"><span class="glyphicon glyphicon-remove icono"/></a></td>
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