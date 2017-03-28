<div class="text-center">
    <h2><?php echo $actor->getNom(); ?> <?php echo $actor->getCognom(); ?></h2>
</div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <?php if ($actor->getFotografia() == null) { ?>
        <img class="img-llista" src="<?php echo $actor->getFotografia(); ?>">
        <?php if ($actor->getSexe() == 'Home') { ?>

            <img class="img-llista" src="view/imatges/actores/default-male.png">
        <?php } else if ($actor->getSexe() == 'Dona') { ?>
            <img class="img-llista" src="view/imatges/actores/default-female.png">
        <?php } ?>
    <?php } ?>
    <br>
    <br>
    <strong>DNI: </strong><?php echo $actor->getNif(); ?><br>
    <br>
    <strong>Sexe: </strong><?php echo $actor->getSexe(); ?><br>
    <br>
</div>	
<div class="table-responsive col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <table class="table table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Projecte</th>
                <th>Paper</th>
                <th>Tipus paper</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            
            <!--acabar aixo!-->
            
            
            {% for papel in papeles %}
            <tr>
                {% for proyecto in proyectos %}
                {% if proyecto.id == papel.idProjecte.id %}
                <td><img height="100px" src="{{absolute_url(asset(proyecto.fotografia))}}"></td>
                <td>{{proyecto.nom}}</td>
                <td>{{papel.nom}}</td>
                <td>{{papel.tipusPaper}}</td>
                <td><a class="rounded-icon" href="{{path('backend_proyecto', {id:proyecto.id})}}"><span class="glyphicon glyphicon-eye-open icono"/></a></td>
                {% endif %}
                {% endfor %}
            </tr>
            {% else %}
            <tr>
                <td colspan="7" class="text-center">Sin resultados</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>