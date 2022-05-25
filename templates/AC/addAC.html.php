<?php

use App\Core\Constantes;

?>


<form method="POST" action="<?= Constantes::WEB_ROOT . 'addac' ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Nom Complet</label>
        <input name="nomComplet" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Nom Complet">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Login</label>
        <input name="login" type="text" class="form-control" id="exampleInputPassword1" placeholder="Grade">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Grade">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>

</html>