<div class="col-xs-12 text-center">
	<h2><?php echo $projecte->getNom(); ?></h2>
</div>
<div class="col-xs-10 col-xs-offset-1">
	<div class="area-proyecto col-xs-12">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-12">
			<?php if($projecte->getFotografia() != "") { ?>
				<img class="col-xs-12 img-proyecto" src="<?php echo $projecte->getFotografia(); ?>">
			<?php } else { ?>
				<img class="col-xs-12 img-proyecto" src="view/imatges/proyectos/not-found.png">
			<?php } ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 info-proyecto">
			<div>
				<strong>Descripción: </strong>
				<li><?php echo $projecte->getDescripcio(); ?></li>
			</div>
			<div>
				<strong>Tipo de obra: </strong>
				<li><?php echo $projecte->getTipoObra(); ?></li>
			</div>
			<div>
				<strong>Director: </strong>
				<li><?php echo $projecte->getDirector(); ?></li>
			</div>
			<div>
				<strong>Fechas: </strong>
				<li>Del <?php echo $projecte->getDataIniciObject(); ?> al <?php echo $projecte->getDataFinalObject(); ?></li>
			</div>
		</div>
	</div>
	<div class="col-xs-12 area-proyecto-actores">
		<div>
			<strong>Actores principales:</strong>
			<p>
				{% for papelPrincipal in papelesPrincipales %}
				<a class="rounded" href="{{path('backend_actor', {id : papelPrincipal.idActor.id})}}">{{papelPrincipal.idActor.nom}} {{papelPrincipal.idActor.cognom}}</a> ({{papelPrincipal.nom}})
				{% if papelPrincipal == papelesPrincipales|last %}
				.
				{% else %}
				, 
				{% endif %}
				{% else %}
				-
				{% endfor %}
			</p>
		</div>
		<div>
			<strong>Actores secundarios:</strong>
			<p>
				{% for papelSecundario in papelesSecundarios %}
				<a class="rounded" href="{{path('backend_actor', {id : papelSecundario.idActor.id})}}">{{papelSecundario.idActor.nom}} {{papelSecundario.idActor.cognom}}</a> ({{papelSecundario.nom}})
				{% if papelSecundario == papelesSecundarios|last %}
				.
				{% else %}
				, 
				{% endif %}
				{% else %}
				-
				{% endfor %}
			</p>
		</div>


	</div>
</div>