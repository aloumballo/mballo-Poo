<?php

use App\Core\Constantes;

?>

<form method="POST" action='add-classe'>




    <div class="form-group">
        <label for="exampleInputPassword1" class="btn btn-info"> Libelle </label>
        <input name=" libelle" type="text" class="form-control" id="exampleInputPassword1" placeholder="Libelle">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1" class="btn btn-info">Filiére</label>
        <input name="filiere" type="text" class="form-control" id="exampleInputPassword1" placeholder="Filiere">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1" class="btn btn-info">Niveau</label>
        <input name="niveau" type="text" class="form-control" id="exampleInputPassword1" placeholder="Niveau">
    </div>


    <div>

        <td><input type="radio" name="genre" CHECKED>Ali tall Niang
            <br>
            <input type="radio" name="genre">Baila Wane
            <br>
            <input type="radio" name="genre">weukheugn
            <br>
            <input type="radio" name="genre">Sindakh
        </td>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

</body>

</html>