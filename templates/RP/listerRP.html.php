<?php
echo "<h2>" . $titre . "</h2>";
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scop="col">Nom Complet</th>
            <th scop="col">Login</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($rp as $rp) { ?>
        <tr>
            <td><?= $etu->nom_complet ?></td>
            <td><?= $etu->login ?></td>
        </tr>
        <?php } ?>

    </tbody>
</table>