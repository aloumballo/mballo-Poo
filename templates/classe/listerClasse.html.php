<table class="table table-striped">
    <thead>
        <tr>
            <th scop="col">Libelle</th>
            <th scop="col">Filiére</th>
            <th scop="col">Niveaux</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($classe as $classe) { ?>
        <tr>
            <td><?= $classe->libelle ?></td>
            <td><?= $classe->filiere ?></td>
            <td><?= $classe->niveau ?></td>

        </tr>
        <?php } ?>

    </tbody>
</table>