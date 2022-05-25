<?php
echo "<h2>" . $titre . "</h2>";
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scop="col">Nom Complet</th>
            <th scop="col">Adresse</th>
            <th scop="col">Sexe</th>
            <th scop="col">Matricule</th>
            <th scop="col">Login</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($etu as $etu) { ?>
        <tr>
            <td><?= $etu->nom_complet ?></td>
            <td><?= $etu->adresse ?></td>
            <td><?= $etu->sexe ?></td>
            <td><?= $etu->matricule ?></td>
            <td><?= $etu->login ?></td>
            <td>
                <a href="" class="btn btn-info btn-sm">Details</a>
                <a href="" class="btn btn-success btn-sm">Modifier</a>
                <a href="" class="btn btn-danger btn-sm">Suprimer</a>
            </td>
        </tr>
        <?php } ?>

    </tbody>
</table>