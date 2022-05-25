<table class="table table-striped">
    <thead>
        <tr>
            <th scop="col">Libelle</th>
              <th scop="col">Filiére</th>
            <th scop="col">Niveaux</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($prof as $prof) {?>
             <tr> 
               <td><?=$prof->Libelle?></td>
               <td><?=$prof->Filiére?></td>
                 <td><?=$prof->Niveau?></td>

            </tr>
         <?php } ?>
          
    </tbody>
</table>
