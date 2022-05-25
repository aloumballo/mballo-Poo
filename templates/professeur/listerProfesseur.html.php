<table class="table table-striped">
    <thead>
        <tr>
            <th scop="col">Nom Complet</th>
            <th scop="col">Grade</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($prof as $prof) { ?>
        <tr>
            <td><?= $prof->nom_complet ?></td>
            <td><?= $prof->grade ?></td>
            <td>
                <a href="" class="btn btn-info">Details</a>
                <a href="" class="btn btn-success">Modifier</a>
                <a href="" class="btn btn-danger">Suprimer</a>
            </td>

        </tr>
        <?php } ?>

    </tbody>
</table>