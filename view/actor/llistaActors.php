<div class="container">
    <div class="row contingut table-responsive">
        <div class="col-xs-12">
            <table class="table">
                <tr>
                    <th>DNI</th>
                    <th>Nom</th>
                    <th>Cognom</th>
                    <th>Sexe</th>
                    <th>Fotografia</th>
                </tr>
                <?php foreach ($llistaActors as $data) { ?>
                    <tr>

                        <td><?php echo $data->getNif(); ?></td>
                        <td><?php echo $data->getNom(); ?></td>
                        <td><?php echo $data->getCognom(); ?></td>
                        <td><?php echo $data->getSexe(); ?></td>
                        <td><?php echo $data->getFotografia(); ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
